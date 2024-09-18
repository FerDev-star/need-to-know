@extends('layout')
@section('content')
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="login-title">Sign in to your account</h2>
        </div>


        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">

            <!-- The toast of failed. -->
            @if (session('message'))
                <div class="toast toast-danger mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path
                            d="M256,48C141.31,48,48,141.31,48,256s93.31,208,208,208,208-93.31,208-208S370.69,48,256,48Zm75.31,260.69a16,16,0,1,1-22.62,22.62L256,278.63l-52.69,52.68a16,16,0,0,1-22.62-22.62L233.37,256l-52.68-52.69a16,16,0,0,1,22.62-22.62L256,233.37l52.69-52.68a16,16,0,0,1,22.62,22.62L278.63,256Z" />
                    </svg>
                    <p>
                        {{ session('message') }}
                    </p>
                </div>
            @endif
            <form class="space-y-6" action="{{ route('register.user') }}" method="POST">
                @csrf
                <div>
                    <label for="username" class="login-label">Username</label>
                    <div class="mt-2">
                        <input id="username" name="username" type="text" class="w-full">
                    </div>
                    {{-- <p class="form-error-message">{ Error message }</p> --}}
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="login-label">Password</label>
                    </div>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" class="w-full">
                    </div>
                    {{-- <p class="form-error-message">{ Error message }</p> --}}
                </div>
                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="login-label">Confirm Password</label>
                    </div>
                    <div class="mt-2">
                        <input id="password" name="confirm_password" type="password" class="w-full">
                    </div>
                    {{-- <p class="form-error-message">{ Error message }</p> --}}
                </div>
                <div>
                    <button type="submit" class="btn w-full">Register</button>
                </div>
            </form>
            <br>
            <div>
                <button class="btn w-full"><a href="{{ route('login.page') }}">Login</a</button>
            </div>
            <br>
            <div>
                <button class="btn w-full"><a href="{{ route('user.index') }}">Log in as a guest</a></button>
            </div>
        </div>
    </div>
@endsection