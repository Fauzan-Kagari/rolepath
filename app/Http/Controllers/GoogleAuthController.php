<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        $googleUser = Socialite::driver('google')->user();

        $user = User::where('google_id', $googleUser->getId())->first();

        if ($user) {
            Auth::login($user);
            return $this->redirectByRole($user);
        }

        $user = User::where('email', $googleUser->getEmail())->first();

        if ($user) {
            $user->update(['google_id' => $googleUser->getId()]);
            Auth::login($user);
            return $this->redirectByRole($user);
        }

        $user = User::create([
            'name' => $googleUser->getName(),
            'email' => $googleUser->getEmail(),
            'google_id' => $googleUser->getId(),
            'password' => null,
            'role' => 'student',
        ]);

        Auth::login($user);
        return $this->redirectByRole($user);
    }

    private function redirectByRole($user)
    {
        if ($user->role === 'admin') return redirect('/admin/dashboard');
        if ($user->role === 'recruiter') return redirect('/talent-hub');
        return redirect('/dashboard');
    }
}
