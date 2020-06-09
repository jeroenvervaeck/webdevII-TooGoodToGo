@if(Auth::check())

<h1>Edit blog</h1>

<form action="{{ route('admin.save', $blog->id ) }}" method="post">
    @csrf

    @if($blog)
    <input type="hidden" name="id" value="{{ $blog->id }}">
    @endif

    <input value={{ $blog->title }} name="title" type="text" value="{{ old('title', ($blog ? $blog->title : '') ) }}" class="@error('title') invalid @enderror">

    <input value={{ $blog->discription }} name="discription" type="text" value="{{ old('discription', ($blog ? $blog->discription : '') ) }}" class="@error('discription') invalid @enderror">

    <input value={{ $blog->type_of_food }} name="type_of_food" type="text" value="{{ old('type_of_food', ($blog ? $blog->type_of_food : '') ) }}" class="@error('type_of_food') invalid @enderror">

    <div class="medium-12  columns">
      <input value="BEWAAR" class="button success hollow" type="submit">
    </div>
    <div class="medium-12 columns">
        @if($errors->any())
        <div class="callout error">
            <ul>
                @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
  </form>

@else
<h1>You are not logged in</h1>
<a href="/">return to welcomepage</a>


@endif
