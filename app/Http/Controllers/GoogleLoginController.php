<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Laravel\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;


class GoogleLoginController extends Controller
{
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(){
        $googleUser = Socialite::driver('google')->user();
            
        $user = User::updateOrCreate([
            'google_id'=>$googleUser->id,

        ], [
            'name' => $googleUser->name,
            'email' => $googleUser->email,
            'password' => $googleUser->token
        ]);
        
        if($user){
            Auth::login($user);
            return redirect()->route('dashboard');
        }else{
            return redirect()->route('login');
        }
    }
    
    public function logout(User $user){
        Auth::logout($user);
        return redirect('/');
    }
}
