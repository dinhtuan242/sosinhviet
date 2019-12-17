<?php

namespace App\Services;

use App\Models\User;

class UserService
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function signIn($param, $provider)
    {
        $user = User::where('provider_id', $param->id)->first();
        if (!$user) {
            $user = User::create([
                'name'     => $param->name,
                'email'    => $param->email,
                'provider' => $provider,
                'provider_id' => $param->id,
            ]);
        }
        return $user;
    }

    public function count()
    {
        return $this->user->all()->count();
    }
}
