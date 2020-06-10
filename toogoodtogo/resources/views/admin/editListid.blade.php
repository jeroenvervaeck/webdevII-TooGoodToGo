@if(Auth::check())

<h1>Edit List ID</h1>

<form action="{{ route('admin.saveListid', $listid ) }}" method="post">
    @csrf

    <input value={{ $listid }} name="apikey" type="text" value="{{ $listid }}>

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
