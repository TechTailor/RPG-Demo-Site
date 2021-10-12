<div>
    <div class="w-full mt-8">
        <div class="grid grid-cols-12 gap-4">
            <!-- Sidebar -->
            <div class="col-span-12 sm:col-span-6 md:col-span-3">
                <div class="py-2 px-2 mb-2 border-dashed rounded-sm bg-white border-2 border-gray-200">
                    <div>
                        <a wire:click='showPresets()'
                            class="@if($this->showPresets) bg-gray-200 @endif cursor-pointer mb-2 flex justify-start items-center px-3 py-2 rounded-md text-gray-500 hover:text-gray-700 hover:bg-gray-200">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <div>
                                <span class="font-bold ml-4">Using Presets</span>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a wire:click='showGenerator()'
                            class="@if($this->showGenerator) bg-gray-200 @endif cursor-pointer mb-2 flex justify-start items-center px-3 py-2 rounded-md text-gray-500 hover:text-gray-700 hover:bg-gray-200">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                                </svg>
                            </div>
                            <div>
                                <span class="font-bold ml-4">Custom Generator</span>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a wire:click='showDecrypt()'
                            class="@if($this->showDecrypt) bg-gray-200 @endif cursor-pointer mb-2 flex justify-start items-center px-3 py-2 rounded-md text-gray-500 hover:text-gray-700 hover:bg-gray-200">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <span class="font-bold ml-4">Using Decrypt</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="text-center">
                    <span class="text-sm text-gray-700 hover:text-gray-900" underline>Build by <a href="https://twitter.com/techtailor" target="_blank">@TechTailor</a></span>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 md:col-span-9">
                <!-- Presets Tab -->
                @if($this->showPresets)
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div class="px-4 py-3 bg-gray-800 text-right text-white sm:px-6">
                        <div class="flex justify-between items-center">
                            <div class="flex justify-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                                <span class="ml-4 text-xl leading-7 font-bold">Using Presets</span>
                            </div>
                            <div class="">
                                <span
                                    class="text-red-500 bg-red-100 ml-1 p-1 rounded-lg text-lg font-bold">RPG::Preset($preset)</span>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-6">
                                <div class=" text-sm text-gray-600 mb-5">
                                    You can use one of the 5 pre-defined configurations for generating an easy or complex random
                                    string. By default, strings generated through presets are not encrypted.
                                </div>
                                <div class="">
                                    <button wire:click="generatePreset('1')"
                                        class="mt-1 md:mt-0 bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded">Preset
                                        1</button>
                                    <button wire:click="generatePreset('2')"
                                        class="mt-1 md:mt-0 bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded">Preset
                                        2</button>
                                    <button wire:click="generatePreset('3')"
                                        class="mt-1 md:mt-0 bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded">Preset
                                        3</button>
                                    <button wire:click="generatePreset('4')"
                                        class="mt-1 md:mt-0 bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded">Preset
                                        4</button>
                                    <button wire:click="generatePreset('5')"
                                        class="mt-1 md:mt-0 bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded">Preset
                                        5</button>
                                </div>
                                <div class="mt-4">
                                    <label class="text-gray-700">
                                        <input class="form-checkbox h-5 w-5 text-red-500 " type="checkbox" wire:model.lazy="encryptPreset" value="{{ $this->encryptPreset }}" @if($this->encryptPreset) wire:click="$set('encryptPreset', 0)" @else wire:click="$set('encryptPreset',1)" @endif />
                                        <span class="ml-1">Encrypt Generated Result</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if($this->preset_string)
                    <div class="px-4 py-3 bg-gray-200 text-right sm:px-6">
                        <div class="flex items-center">
                            <div class="flex justify-start items-center text-left ml-4 text-xl leading-7 font-bold">
                                <span class="text-gray-900 dark:text-white">Result</span>
                                <span class="break-all ml-5 text-gray-900 bg-red-100 p-1 pl-2 pr-2 rounded-lg text-lg font-bold">
                                    {{ $this->preset_string }}
                                </span>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
                @endif
                <!-- Custom Generator Tab -->
                @if($this->showGenerator)
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div class="px-4 py-3 bg-gray-800 text-left text-white sm:px-6">
                        <div class="flex justify-between flex-wrap items-center">
                            <div class="flex justify-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                                </svg>
                                <span class="ml-4 text-xl leading-7 font-bold">Using Custom Generator</span>
                            </div>
                            <div class="mt-2 md:mt-0">
                                <span
                                    class="text-red-500 bg-red-100 ml-1 p-1 rounded-lg text-sm md:text-lg font-bold">RPG::Generate($characters, $size, $dashes, $encrypt)</span>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-6">
                                <div class=" text-sm text-gray-600 mb-5">
                                    You can use the `Generate` command to generate a custom designed string. Check the readme on github for more details.
                                </div>
                                <div class="">
                                    <div class="col-span-6 sm:col-span-4">
                                        <div class="">
                                            <label for="encrypted_string" class="block font-bold text-sm text-gray-700">
                                                Select Character Set
                                            </label>
                                            <select id="g_character_set" wire:model.lazy="g_character_set"
                                                class="mt-1 block form-select w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 "
                                                >
                                                <option value="l">Lowercase Alphabets Only</option>
                                                <option value="lu">Lowercase + Uppercase Alphabets</option>
                                                <option value="lud">Lowercase + Uppercase + Digits</option>
                                                <option value="luds">Lowercase + Uppercase + Digits + Special Characters</option>
                                            </select>
                                            @error('g_character_set') <span class="text-red-500">{{ $message }}</span> <br /> @enderror
                                        </div>
                                        <div class="mt-4">
                                            <label for="encrypted_string" class="block font-bold text-sm text-gray-700">
                                                Select String Size
                                            </label>
                                            <input type="text" wire:model.defer="g_size" id="g_size"
                                                class="mt-1 form-input block w-full rounded-lg transition duration-150 ease-in-out sm:text-sm sm:leading-5 ">
                                            @error('g_size') <span class="text-red-500">{{ $message }}</span> <br /> @enderror
                                        </div>
                                        <div class="mt-4">
                                            <label for="g_dashes" class="block font-bold text-sm text-gray-700">
                                                Dashes
                                            </label>
                                            <select id="g_dashes" wire:model.lazy="g_dashes"
                                                class="mt-1 block form-select w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 ">
                                                <option value="0">No Dashes</option>
                                                <option value="1">Add Dashes</option>
                                            </select>
                                            @error('g_dashes') <span class="text-red-500">{{ $message }}</span> <br /> @enderror
                                        </div>
                                        <div class="mt-4">
                                            <label for="g_encrypt" class="block font-bold text-sm text-gray-700">
                                                Encrypt this?
                                            </label>
                                            <select id="g_encrypt" wire:model.lazy="g_encrypt"
                                                class="mt-1 block form-select w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 ">
                                                <option value="0">No</option>
                                                <option value="1">Yes</option>
                                            </select>
                                            @error('g_encrypt') <span class="text-red-500">{{ $message }}</span> <br /> @enderror
                                        </div>
                                        <button wire:click="generateCustomString()"
                                            class="mt-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"
                                            wire:loading.attr="disabled">
                                            Generate
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if($this->custom_string)
                    <div class="px-4 py-3 bg-gray-200 text-right sm:px-6">
                        <div class="flex items-center">
                            <div class="flex justify-start items-center text-left ml-4 text-xl leading-7 font-bold">
                                <span class="text-gray-900 dark:text-white">Result</span>
                                <span class="break-all ml-5 text-gray-900 bg-red-100 p-1 pl-2 pr-2 rounded-lg text-lg font-bold">
                                    {{ $this->custom_string }}
                                </span>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
                @endif
                <!-- Decrypt Tab -->
                @if($this->showDecrypt)
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div class="px-4 py-3 bg-gray-800 text-right text-white sm:px-6">
                        <div class="flex justify-between flex-wrap items-center">
                            <div class="flex justify-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                                </svg>
                                <span class="ml-4 text-xl leading-7 font-bold">Using Decrypt</span>
                            </div>
                            <div class="mt-2 md:mt-0">
                                <span class="text-red-500 bg-red-100 ml-1 p-1 rounded-lg text-lg font-bold">RPG::Decrypt($encrypted)</span>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-6">
                                <div class=" text-sm text-gray-600 mb-5">
                                    You can decrypt an encrypted string to get back the original one. Only works for the strings encrypted using the same app.
                                </div>
                                <div class="">
                                    <div class="col-span-6 sm:col-span-4">
                                        <label for="encrypted_string" class="block font-bold text-sm text-gray-700">
                                            Enter Encrypted String
                                        </label>
                                        <input type="text" wire:model.defer="encrypted_string" id="encrypted_string"
                                            class="mt-1 form-input block w-full rounded-lg transition duration-150 ease-in-out sm:text-sm sm:leading-5 "
                                        >
                                        @error('encrypted_string') <span class="text-red-500">{{ $message }}</span> <br/> @enderror
                                        <button wire:click="decryptString()"
                                            class="mt-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"
                                            wire:loading.attr="disabled">
                                            Decrypt
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if($this->decrypted_string)
                    <div class="px-4 py-3 bg-gray-200 text-right sm:px-6">
                        <div class="flex items-center">
                            <div class="flex justify-start items-center text-left ml-4 text-xl leading-7 font-bold">
                                <span class="text-gray-900 dark:text-white">Result</span>
                                <span class="break-all ml-5 text-gray-900 bg-red-100 p-1 pl-2 pr-2 rounded-lg text-lg font-bold">
                                    {{ $this->decrypted_string }}
                                </span>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

@push('notyf')
<script>
    window.livewire.on('presetGenerated', msg => {

        notyf.open({
            type: 'success',
            message: 'Preset '+ msg + ' String Generated.'
        });
    });
    window.livewire.on('customStringGenerated', msg => {

        notyf.open({
            type: 'success',
            message: 'Custom string generated.'
        });
    });
    window.livewire.on('stringDecrypted', msg => {

        notyf.open({
            type: 'success',
            message: 'Decryption Complete.'
        });
    });
</script>
@endpush
