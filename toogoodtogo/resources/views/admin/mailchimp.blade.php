@if(Auth::check())
<a href="/">return to welcomepage</a>

<h1>Mailchimp</h1>

<table class="admin_table">
    <tr>
        <th>Api Key</th>
        <th>List ID</th>
        <th></th>
    </tr>
    <tr>
        <td>{{ $apikey }}</td>
        <td>{{ $listid }}</td>
        <td><a href="{{ route('admin.editApikey', ['apikey'=>$apikey]) }}"">Edit APIKEY</a></td>
        <td><a href="{{ route('admin.editListid', ['listid'=>$listid]) }}"">Edit LISTID</a></td>
    </tr>
</table>

@else

<h1>You are not logged in</h1>
<a href="/">return to welcomepage</a>


@endif
