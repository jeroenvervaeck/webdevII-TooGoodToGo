@extends('layout')

@section('content')

<div class="o-nieuwsletterpage">

    <h1>Nieuwsletter</h1>

    <form action="" method="post" class="o-nieuwsletterform">

        @csrf

        <input type="email" name="email" id="email" placeholder="E-mail" required>
        <button type="submit">Sign up for nieuwsletter</button>
    </form>
</div>

@endsection
