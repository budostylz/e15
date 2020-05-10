<!DOCTYPE html>
<html>
<head>

    <title>@yield('title', 'Bar App')</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>


    <div class="container-fluid">
        <div class="row">
            <div class="col-xl">

                <nav class="navbar navbar-expand-xl navbar-dark bg-dark">
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="/barlocator">Home</a>
                                </li>


                                 <li class="nav-item">

                                    @if(Auth::user())
                                        @if(Auth::user()->entity_type == 'Bartender')
                                            <a class="nav-link" href="/bartenderreview">Review Customer Order</a>

                                        @else
                                            <a class="nav-link" href="/checkoutdrinks">Review Your Order</a>
                                        @endif
                                    @endif

                                 </li>



                                <li class="nav-item">
                                    @if(!Auth::user())
                                            <a class="nav-link" href="/login">Login</a>
                                    @else
                                        <form method='POST' id='logout' action='/logout'>
                                            {{ csrf_field() }}
                                            <a class="nav-link" href='#' onClick='document.getElementById("logout").submit();'>Logout {{ Auth::user()->first_name }}</a>
                                        </form>
                                    @endif
                                </li>

                            </ul>
                        </div>
                </nav>
            </div>
        
        </div>


           <section id='main'>
                @yield('content')
           </section>

            


    </div>

    




</body>
</html>
