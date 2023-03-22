<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //Welcome
    public function index()
    {
        return view('welcome');
    }
}
