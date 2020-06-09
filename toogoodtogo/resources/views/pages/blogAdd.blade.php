@extends('layout')

@section('content')

<div class="o-blogaddpage">

    <h1>Add a blogpost</h1>

    <form action="" method="post" class="o-blogaddform">

        @csrf

        <input type="text" name="title" id="title" placeholder="Title" required>
        <input type="text" name="discription" id="discription" placeholder="Description" required>
        <input type="text" name="type_of_food" id="type_of_food" placeholder="type of food" required>
        <button type="submit">Add</button>
    </form>
</div>

@endsection
