@if(Auth::check())
<a href="/">return to welcomepage</a>

<h1>Donations</h1>

<table class="admin_table">
    <tr>
        <th>id</th>
        <th>firstname</th>
        <th>lastname</th>
        <th>email</th>
        <th>description</th>
        <th>amount in €</th>
        <th>isPublic</th>
        <th>Created_at</th>
    </tr>
    @foreach ($donations as $donation)
    <tr>
        <td>{{ $donation->id }}</td>
        <td>{{ $donation->firstname }}</td>
        <td>{{ $donation->lastname }}</td>
        <td>{{ $donation->email }}</td>
        <td>{{ $donation->discription }}</td>
        <td>{{ $donation->amount }}</td>
        <td>{{ $donation->isPublic }}</td>
        <td>{{ $donation->created_at }}</td>
    </tr>
    @endforeach
</table>

@else

<h1>You are not logged in</h1>
<a href="/">return to welcomepage</a>


@endif
