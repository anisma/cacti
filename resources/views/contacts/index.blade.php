@extends('layouts/app')
@section('content')
<div class="contact-us wrapper">
    <div class="contact-us-content">
        <h1>Contact Us</h1>
        <p>If you have any problems, feel free to fill out this form and we will reply your messages.</p>
        <form class="contact-us-form" action="#">
            <div class="input-group">
                <label for="name">Name</label>
                <input type="text" name="name" placeholder="Name">
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Email">
            </div>
            <div class="input-group">
                <label for="message">Message</label>
            <textarea name="message" id="" cols="30" rows="5" placeholder="Message"></textarea>
            </div>
            <button type="submit" class="btn">Send Message</button>
        </form>
    </div>
</div>

@endsection