<!doctype html>
<html lang='en'>

<head>
    <title>@yield('title', 'Bookmark')</title>
    <meta charset='utf-8'>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href='/css/bookmark.css' rel='stylesheet'>

    @yield('head')
</head>

<body>



    @if(session('flash-alert'))
    <div class='flash-alert'>
        {{ session('flash-alert') }}
    </div>
    @endif

    <header>
        <a href='/'><img src='/images/bookmark-logo@2x.png' id='logo' alt='bookmark Logo'></a>

        <nav>
            <ul>
                <li><a href='/'>Home</a></li>
                <li><a href='/books'>All Books</a></li>
                <li><a href='/books/create'>Add a Book</a></li>
                <li><a href='/list'>Your list</a></li>
                <li><a href='/support'>Support</a></li>
                 <li>
                        @if(!Auth::user())
                            <a href='/login'>Login</a>
                        @else
                            <form method='POST' id='logout' action='/logout'>
                                {{ csrf_field() }}
                                <a href='#' onClick='document.getElementById("logout").submit();'>Logout</a>
                            </form>
                        @endif
                 </li>
            </ul>
        </nav>
    </header>

    <section id='main'>
        @yield('content')
    </section>

    <footer>
        &copy; Bookmark <br>
        Questions? Email us at {{ config('mail.supportEmail') }}
    </footer>

</body>

</html>