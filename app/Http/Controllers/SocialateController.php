<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialateController extends Controller
{
    public function googleLogin()
    {
        return Socialite::driver('google')->redirect();
    }
}
