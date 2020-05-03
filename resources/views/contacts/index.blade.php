@extends('layouts/app')
@section('content')
<div class="contact-us-page">
    <div class="contact-us wrapper">
        <div class="contact-us-content">
            <h2>Contact Us</h2>
            <p>If you have an issue regarding an order, please leave the name, email, and order number associated with your order so we can better assist you!</p>
            <p>If you have any problems, feel free to fill out this form or send us an email to support.</p>
            <p>support@cacti.co</p>
        </div>

        <form class="contact-us-form" action="#">
            <x-input type="text" name="name" value="" label="Name"/>
            <x-input type="email" name="email" value="" label="Email"/>
            <div class="form-group">
                <textarea class="form-input @error('message')invalid @enderror" name="message" value="{{ old('message') }} id="message" cols="30" rows="5" placeholder="Message"></textarea>
                <label for="message" class="form-label">Message</label>
                @error('message')
                    <span class="error-message">
                    <strong> {{$message}} </strong>
                    </span>
                @enderror
            </div>
            <button type="submit" class="button">Send Message</button>
        </form>
    </div>
</div>

@endsection