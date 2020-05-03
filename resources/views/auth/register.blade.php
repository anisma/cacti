@extends('layouts.app')

@section('content')
    <div id="register" >
        <div class="register-container">
            <h2>Register</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <x-input name="name" type="texxt" label="Name" value=""/>
                <x-input name="email" type="email" label="Email" value=""/>
                <x-input name="password" type="password" label="Password" value=""/>
                <x-input name="password_confirmation" type="password" label="Confirm Password" value=""/>
                <x-button type="submit">Register</x-button>
            </form>

        </div>
    </div>
@endsection
