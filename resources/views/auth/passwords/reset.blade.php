@extends('layouts.app')

@section('content')
<div id="register" >
    <div class="register-container">
        <h2>Reset Password</h2>
        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <x-input name="email" type="email" label="Email"/>
            <x-input name="password" type="password" label="Password"/>
            <x-input name="password-confirmation" type="password" label="Confirm Password"/>
            <x-button type="submit">Reset Password</x-button>
        </form>

    </div>
</div>
@endsection
