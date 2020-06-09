@extends('layout')


@section('content')

<div class="o-donationpage__list">
    <a href="/donation"><h2>Go back to donations</h2></a>
    <h1>Donation - {{$donation->id}}</h1>

    <div class="m-donationcard">
        <div class="m-donationcard__left">
            <h1>{{$donation->firstname}} {{$donation->lastname}}</h1>
            <p>{{$donation->discription}}</p>
        </div>
        <div class="m-donationcard__right">
            <h1>{{$donation->amount}}.00 €</h1>
        </div>
    </div>

    <p class="a-date">created_at: {{$donation->created_at->format('d M Y - H:i:s')}}</p>


</div>

@endsection

