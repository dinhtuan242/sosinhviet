<?php

namespace App\Http\Controllers\Frontend\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\SocialAccountService;
use Illuminate\Support\Facades\Log;
use Socialite;
use Illuminate\Support\Facades\Auth;
use App\Services\UserService;

class SocialController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        $userInfo = Socialite::driver($provider)->user();
        $user = $this->userService->signIn($userInfo, $provider);
        Auth::login($user, true);
        
        return redirect()->route('home-page');
    }

    public function signOut()
    {
        Auth::logout();

        return redirect()->route('home-page');
    }
}
