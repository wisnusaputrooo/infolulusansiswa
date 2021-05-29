@extends('layouts.main')

@section('TitlePage', 'Lulusan Online')

@section('login')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-5">
            <form class="login100-form validate-form ">
                <div class="text-center mb-4">
                    <img src="assets/img/LOGO.png" alt="lockscreen image" class="avatar avatar-xxl rounde-circle mb-1">
                    <h2>SMK Harapan Kartasura</h2>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Username wajib di isi">
                    <input class="input100" type="text" name="username" placeholder="Username">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fas fa-user-graduate" aria-hidden="true"></i>
                    </span>
                </div>
                
                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <input class="input100" type="password" name="pass" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fas fa-fingerprint" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="container-login100-form-btn">
                    <a href="{{url('authentication')}}" class="login100-form-btn btn-primary">
                        Login
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
    
@endsection
