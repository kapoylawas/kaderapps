@extends('layouts.auth.app', ['title' => 'Login'])

@section('content')
    <div class="card-body">
        <p class="login-box-msg">Login Terlebih Dahulu</p>

        <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="mb-3 input-group">
                <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email"
                    name="email" value="{{ old('email') }}">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3 input-group">
                <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password"
                    name="password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
        </form>
        <div class="mt-4">
            <p class="mb-0">
                <a href="{{ route('register') }}" class="text-center">Buat Akun Baru</a>
            </p>
        </div>
    </div>
@endsection