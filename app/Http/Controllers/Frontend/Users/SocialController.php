<?php

namespace App\Http\Controllers\Frontend\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\SocialAccountService;
use Illuminate\Support\Facades\Log;
use Socialite;
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
        $getInfo = Socialite::driver($provider)->user();
        $user = $this->userService->loginFacebook($getInfo, $provider);
        auth()->login($user);
        return redirect()->to('/');
    }
}
