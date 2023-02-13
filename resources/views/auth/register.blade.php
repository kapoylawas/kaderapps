@extends('layouts.auth.app', ['title' => 'Register'])

@section('content')
    <div class="card-body">
        <p class="login-box-msg">Sign up to start your session</p>

        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="mb-3 input-group">
                <input type="name" class="form-control @error('name') is-invalid @enderror" placeholder="Full Name"
                    name="name" value="{{ old('name') }}">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                </div>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
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
            <div class="mb-3 input-group">
                <input type="password" class="form-control @error('password') is-invalid @enderror"
                    placeholder="Password Confirmation" name="password_confirmation">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-check"></span>
                    </div>
                </div>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary btn-block">Register</button>
        </form>
        <div class="mt-4">
            <p class="mb-0">
                <a href="{{ route('login') }}" class="text-center">Already have one</a>
            </p>
        </div>
    </div>
@endsection