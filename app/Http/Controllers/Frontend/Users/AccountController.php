<?php

namespace App\Http\Controllers\Frontend\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function signIn()
    {
        return view('frontend.auth.sign-in');
    }
    public function signUp()
    {
        return view('frontend.auth.sign-up');
    }
    public function signOut()
    {
        Auth::logout();
        return redirect()->route('home-page');
    }
}
