<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class exampleController extends Controller
{

    public function homepage () {
        return view('homepage');
    }

    public function loginPage () {
        return view('loginPage');
    }
}
