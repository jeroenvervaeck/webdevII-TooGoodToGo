@extends('layout')


@section('content')

<div class="o-blogspage">
    <a href="/blog"><h2>Go back to blogs</h2></a>
    <h1>Blog - {{$blog->id}}</h1>

    <div class="m-blog">
        <div class="m-blog__left">
            <h1>{{$blog->title}}</h1>
            <p>{{$blog->discription}}</p>
        </div>
        <div class="m-blog__right">
            <h1>{{$blog->type_of_food}}</h1>
        </div>
    </div>

    <p class="a-date">created_at: {{$blog->created_at->format('d M Y - H:i:s')}}</p>


</div>

@endsection

