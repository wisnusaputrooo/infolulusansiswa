@extends('layouts.main')

@push('css')
    <!-- Single-page CSS -->
	<link href="{{asset('assets/plugins/single-page/css/main.css')}}" rel="stylesheet" type="text/css">
@endpush

@section('TitlePage', 'Lulusan Online')

@section('login')
<div class="limiter">
    <div class="container-login100">

        <div class="wrap-login100 p-5">
            <form class="login100-form validate-form" method="POST" action="/authentication">
                @csrf
                <input type="hidden" name="_token" value="{{csrf_token()}}">
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
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fas fa-fingerprint" aria-hidden="true"></i>
                    </span>
                </div>

                {{-- <div class="container-login100-form-btn">
                    <a href="{{url('authentication')}}" class="login100-form-btn btn-primary">
                        Login
                    </a>
                </div> --}}
                @include('layouts.message-alert')

                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn btn-primary btn-pill mt-1 mb-1">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
    
@endsection
