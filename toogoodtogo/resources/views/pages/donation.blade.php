@extends('layout')

@section('content')

<div class="o-donationpage">

    @if($update ?? '' === 'yes')
        <h3>🎉🎉 Thank you for your donation! 🎉🎉</h3>
    @endif

    <h1>Donate now!</h1>

    <form action="" method="post" class="o-donationpage__form">

        @csrf

        <input type="text" name="firstname" id="firstname" placeholder="Firstname *" required>
        <input type="text" name="lastname" id="lastname" placeholder="Lastname *" required>
        <input type="email" name="email" id="email" placeholder="E-mail *" required>
        <textarea name="discription" id="discription" cols="30" rows="10" placeholder="Type message here *" required></textarea>
            <label>How much would you like to donate? ( in € ) *</label>
        <input type="number" name="amount" id="amount" placeholder="Amount" min="0" value="5" required>
            <label>Do you want the donation to be public?</label>
        <input type="radio" name="isPublic" id="isPublic" value='true'>

        <button type="submit"><p>Donate</p></button>
    </form>

    <hr>

    <h1>Donations</h1>

    <ul class="o-donationpage__list">
        @foreach ($donations as $donation)
        <a href="/donation/detail/{{$donation->id}}">
            <li class="m-donationcard">
                <div class="m-donationcard__left">
                    <h1>{{$donation->firstname}} {{$donation->lastname}}</h1>
                    <p>{{$donation->discription}}</p>
                </div>
                <div class="m-donationcard__right">
                    <h1>{{$donation->amount}}.00 €</h1>
                </div>
            </li>
        </a>
        @endforeach

        {{ $donations->links() }}

    </ul>

</div>

@endsection
