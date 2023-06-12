<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request) {
        // dd('masuk');
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        // $user = null;
        if (@$request->user == 'buyer') {
            $user = Buyer::where('email', $credentials['email'])->first();
        } else {
            $user = Seller::where('email', $credentials['email'])->first();
        }
        $isEmailRight = $user;
        $isPasswordRight = Hash::check($credentials['password'], $user->password);
        
        if ($isEmailRight && $isPasswordRight) {
            // dd('berhasil');
            $request->session()->put('loginId', $user->id);
            $request->session()->regenerate();

            return redirect()->intended('/home');
        }
        // dd('gagal');
        return back()->withErrors(['loginFailed' => 'Email or password is incorrect!']);
    }
}
