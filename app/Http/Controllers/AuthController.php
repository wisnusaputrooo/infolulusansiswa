<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use App\Http\Requests\AuthenticationRequest;

class AuthController extends Controller
{
    public function username()
    {
        return 'username';
    }

    public function login(AuthenticationRequest $request)
    {  
        $data = [
            'username'  => $request->input('username'),
            'password'  => $request->input('password'),
        ];

        Auth::attempt($data);
        // dd(Auth::check());

        if (Auth::check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
            //Login Success
            return redirect('home')->with('success', 'Berhasil Login');
  
        } else { // false
  
            //Login Fail
            // Session::flash('warn', ['message' => 'loop']);
            return redirect('/login')->with('warn', 'Email atau password salah');
            // echo 'gagal';
        }
  
    }

    public function logout()
    {
        Auth::logout(); // menghapus session yang aktif
        return redirect('login');
    }
}
