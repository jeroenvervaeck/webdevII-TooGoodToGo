@if(Auth::check())
<a href="/">return to welcomepage</a>

<h1>Blogs</h1>

<a href="{{ route('blog.add') }}">ADD A BLOG</a>

<table class="admin_table">
    <th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </th>
    @foreach ($blogs as $blog)
    <tr>
        <td>{{ $blog->title }}</td>
        <td>{{ $blog->discription }}</td>
        <td>{{ $blog->type_of_food }}</td>
        <td><a href="{{ route('admin.edit', $blog->id) }}"">EDIT</a></td>
        <td><a href="{{ route('admin.delete', $blog->id) }}">DELETE</a></td>
    </tr>
    @endforeach
</table>

@else

<h1>You are not logged in</h1>
<a href="/">return to welcomepage</a>


@endif
