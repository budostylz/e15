<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

<form>
<div class="container-fluid">
    <div class="row">
        <div class="col-xl">

                <nav class="navbar navbar-expand-xl navbar-dark bg-dark">
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="/barlocator">Home</a>
                                </li>

                                <li class="nav-item active">
                                    <a class="nav-link" href="/bartenderreview">Review Order(Bar Tender)</a>
                                </li>

                                 <li class="nav-item">
                                    <a class="nav-link" href="/checkoutdrinks">Review Order(Customer)</a>
                                 </li>

                                <li class="nav-item">
                                    @if(!Auth::user())
                                            <a class="nav-link" href="/login">Login</a>
                                    @else
                                        <form method='POST' id='logout' action='/logout'>
                                            {{ csrf_field() }}
                                            <a class="nav-link" href='#' onClick='document.getElementById("logout").submit();'>Logout</a>
                                        </form>
                                    @endif
                                </li>




                            </ul>
                        </div>
                </nav>
        </div>
    
    </div>

    <div class="row pt-5">
        <div class="col-sm"></div>
        <div class="col-sm" style="text-align:center">
            <h2>Click Customer to View Pending Order</h2>
        </div>
        <div class="col-sm"></div>
    </div>

  <div class="row">
    <div class="col-sm"></div>
    <div class="col-sm">

    <ul class="list-group text-center">
        <li class="list-group-item"><a href="/processcustomerorder" class="text-dark">Customer1</a></li>
        <li class="list-group-item"><a href="/processcustomerorder" class="text-dark">Customer2</a></li>
        <li class="list-group-item"><a href="/processcustomerorder" class="text-dark">Customer3</a></li>
    </ul>

    
    </div>
    <div class="col-sm"></div>
  </div>

 


</div>

</form>



</body>
</html>
