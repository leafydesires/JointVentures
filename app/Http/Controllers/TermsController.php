<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermsController extends Controller
{
    //Terms
    public function terms()
    {
        return view('terms.terms');
    }
}
