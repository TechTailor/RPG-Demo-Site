<?php

namespace App\Http\Livewire;

use Livewire\Component;
use TechTailor\RPG\Facade\RPG;
use Illuminate\Contracts\Encryption\DecryptException;

class PackageDemo extends Component
{
    public $showPresets = true;

    public $showGenerator = false;
    
    public $showDecrypt = false;

    // For Preset
    public $preset_string = null;
    public $encryptPreset = 0;

    // For Custom Generator
    public $g_character_set = 'lud';
    public $g_size = 12;
    public $g_dashes = 0;
    public $g_encrypt = 0;
    public $custom_string = null;

    // For Decrypt
    public $encrypted_string = null;
    public $decrypted_string = null;

    public function showPresets() 
    {
        $this->showPresets = true;
        $this->showGenerator = false;
        $this->showDecrypt = false;
        $this->resetOptions();
    }

    public function showGenerator()
    {
        $this->showGenerator = true;
        $this->showPresets = false;
        $this->showDecrypt = false;
        $this->resetOptions();
    }

    public function showDecrypt()
    {
        $this->showDecrypt = true;
        $this->showPresets = false;
        $this->showGenerator = false;
        $this->resetOptions();
    }

    public function generatePreset($preset)
    {
        $this->preset_string = RPG::Preset($preset, $this->encryptPreset);

        $this->emit('presetGenerated', $preset);
    }

    public function generateCustomString()
    {
        $this->validate([
            'g_character_set' => 'required',
            'g_size' => 'required|numeric',
            'g_dashes' => 'required|boolean',
            'g_encrypt' => 'required|boolean'
        ]);

        $this->custom_string = RPG::Generate($this->g_character_set, $this->g_size, $this->g_dashes, $this->g_encrypt);

        $this->emit('customStringGenerated', true);
    }

    public function decryptString()
    {
        $this->validate([
            'encrypted_string' => 'required'
        ]);

        try {
            $this->decrypted_string = RPG::Decrypt($this->encrypted_string);

            $this->emit('stringDecrypted', true);
        } catch (DecryptException $e) {
            $this->addError('encrypted_string', 'Invalid String Given. Either the string is not encrypted or encrypted using a different key.');
        }
    }

    public function resetOptions()
    {
        $this->preset_string = null;
        $this->encrypted_string = null;
        $this->decrypted_string = null;
        $this->g_character_set = 'lud';
        $this->g_size = 12;
        $this->g_dashes = 0;
        $this->g_encrypt = 0;
        $this->custom_string = null;
        $this->resetErrorBag();
    }

    public function render()
    {
        return view('livewire.package-demo');
    }
}
