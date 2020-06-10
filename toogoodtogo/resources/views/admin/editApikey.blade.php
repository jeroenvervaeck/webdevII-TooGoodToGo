@if(Auth::check())

<h1>Edit Api Key</h1>

<form action="{{ route('admin.saveApikey', $apikey ) }}" method="post">
    @csrf

    <input value={{ $apikey }} name="apikey" type="text" value="{{ $apikey }}>

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

  het is me niet gelukt om dit aan te passen in de .env file

@else
<h1>You are not logged in</h1>
<a href="/">return to welcomepage</a>


@endif
