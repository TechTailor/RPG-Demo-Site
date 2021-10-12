<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TechTailor\RPG\Facade\RPG;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
}
