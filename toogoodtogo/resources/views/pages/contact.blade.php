@extends('layout')

@section('content')

<div class="o-contactpage">
    
    <h1>Contact</h1>

    <form action="" method="post" class="o-contactform">

        @csrf

        <input type="text" name="name" id="name" placeholder="Name" required>
        <input type="email" name="email" id="email" placeholder="E-mail" required>
        <input type="text" name="subject" id="subject" placeholder="Subject" required>
        <textarea name="content" id="content" cols="30" rows="10" placeholder="type message here" required></textarea>
        <button type="submit">Send</button>
    </form>
</div>

@endsection
