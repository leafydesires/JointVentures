<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    //
    public function privacy()
    {
        return view('terms.privacy');
    }
}
