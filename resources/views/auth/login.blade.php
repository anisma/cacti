@extends('layouts.app')

@section('content')
    <div id="login" >
        <div class="login-container">
            <h2>Login</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <x-input name="email" type="email" label="Email" value=""/>
                <x-input name="password" type="password" label="Password" value=""/>
                <div class="wrapper">
                    <x-checkbox name="remember" label="Remember me" value="remember"/>
                    @if (Route::has('password.request'))
                        <a class="button-link" href="{{ route('password.request') }}">
                            Forgot password?
                        </a>
                        @endif
                </div>
                    <x-button type="submit">login</x-button>
                    
                @if (Route::has('register'))
                    <p>Don't have account yet? <a class="button-link" href="{{ route('register') }}">Register</a></p>
                @endif
                
                
            </form>

        </div>
    </div>
@endsection
