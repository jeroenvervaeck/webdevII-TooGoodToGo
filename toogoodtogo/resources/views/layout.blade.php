<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TooGoodTooGo</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>
<body>

    <header>
       <ul class="m-nav">
           <li><a class='a-nav_logo' href="/home"><img src="{{asset('../images/tgtg_logo.svg')}}"></a></li>
           <li><a href="/blog">Blog</a></li>
           <li><a href="/about">About</a></li>
           <li><a href="/donation">Donations</a></li>
           <li><a href="/nieuwsletter">Nieuwsletter</a></li>
           <li><a href="/contact">Contact</a></li>
       </ul>
    </header>

    <div class="content">
        @yield('content')
    </div>

    <footer>
        <p>&copy; Arteveldehs 2020</p>
        <p>Webdevelopment 2</p>
        <p>- Jeroen Vervaeck</p>
    </footer>
</body>
</html>
