<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;




class UserController extends Controller
{

    public function showCorrectHomepage() {
        if(Auth::check()) {
            return view('homepage-user');
        }else {
            return view('homepage');
        }
    }

    public function login(Request $request) {
        $incomingFields = $request->validate([
            'login_username' => 'required',
            'login_password' => 'required'
        ]);
    
         if(Auth::attempt([
            'username' => $incomingFields['login_username'],
            'password' => $incomingFields['login_password']
         ])) {
            $request->session()->regenerate();
           
         } else {
            return 'Sorry';
         }
    }

    public function signup(Request $request) {
        $incomingFields = $request->validate([
            'username' => ['required', 'min:3', 'max:20', Rule::unique('users', 'username')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:6', 'confirmed']
            
        ]);
        User::create($incomingFields);
        return 'hello this is signup page';
    }
}
