@extends('layouts.app')

@section('content')
<div id="register" >
                <div class="register-container">
                    <h2>Reset Password</h2>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <x-input name="email" type="email" label="Email" value=""/>
                        <x-button type="submit">Send Password Reset Link</x-button>
                    </form>

                </div>
            </div>
@endsection
