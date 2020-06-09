@extends('layout')


@section('content')

<div class="o-blogspage">
    <h1>Blog</h1>

    <a href="/blog/add"><p class="a-add">Add a new Blogpost</p></a>

    @foreach ($blogs as $blog)
        <a href="/blog/detail/{{$blog->id}}" </a>
            <div class="m-blog">
                <div class="m-blog__left">
                    <h1>{{$blog->title}}</h1>
                    <p>{{$blog->discription}}</p>
                </div>
                <div class="m-blog__right">
                    <h1>{{$blog->type_of_food}}</h1>
                </div>
            </div>
        </a>
    @endforeach

    {{ $blogs->links() }}

</div>

@endsection

