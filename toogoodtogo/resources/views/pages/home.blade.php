@extends('layout')

@section('content')

<div class="o-homepage">
    <div class="m-homepage__top">
        <img src="{{asset('../images/tgtg_logo_text.svg')}}">
        <h1>{{$h1}}</h1>
    </div>
    <hr>
    <div class="m-homepage__bot">
        <div class="m-homepage__bot-left">
            <h1>{{$h2}}</h1>
            <p>{{$paragraf}}</p>
        </div>
        <div class="m-homepage__bot-right">
            <img src="{{asset('../images/food.jpg')}}">
        </div>
    </div>
</div>


{{-- <div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    You are logged in!
</div>
 --}}

@endsection
