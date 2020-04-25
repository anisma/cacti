@extends('layouts/app')
@section('content')
<div class="contact-us-page">
    <div class="_contact-us wrapper">
        <div class="contact-us-content">
            <h1>Contact Us</h1>
            <p>If you have an issue regarding an order, please leave the name, email, and order number associated with your order so we can better assist you!</p>
            <p>If you have any problems, feel free to fill out this form or send us an email to support.</p>
            <p>support@cacti.co</p>
        </div>

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