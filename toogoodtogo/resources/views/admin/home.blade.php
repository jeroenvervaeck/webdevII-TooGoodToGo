@if(Auth::check())
<a href="/">return to welcomepage</a>

<h1>Admin home</h1>

<p>Select the table you want to edit:</p>

<ul>
    <li><a href="/admin/index">blogs</a></li>
    <li><a href="/admin/donations/index">donations</a></li>
</ul>






@else
<h1>You are not logged in</h1>
<a href="/">return to welcomepage</a>


@endif
