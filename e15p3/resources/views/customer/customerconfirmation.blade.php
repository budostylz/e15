<!DOCTYPE html>
<html>
<head>

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
                                    <a class="nav-link" href="/customer/barlocator">Home</a>
                                </li>


                                 <li class="nav-item">

                                    @if(Auth::user())
                                        @if(Auth::user()->entity_type == 'Bartender')
                                            <a class="nav-link" href="/bartender/bartenderreview">Review Customer Order</a>

                                        @else
                                            <a class="nav-link" href="/customer/checkoutdrinks">Review Your Order</a>
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

    <div class="row">
        <div class="col-sm"></div>
        <div class="col-sm text-center pt-2"><h2>Your Drinks Are Ready</h2></div>
        <div class="col-sm"></div>
    </div>
    <div class="row">
        <div class="col-sm"></div>
        <div class="col-sm text-center pt-2"><a href="#" class="text-dark"><h2>Click Here To Order More Drinks</h2></a></div>
        <div class="col-sm"></div>
    </div>


  <div class="row">
    <div class="col-sm text-center">
        <h3>Review Drink Order</h3>
        <table class="table table-hover table-dark">
            <thead>
                <tr>
                <th scope="col"></th>
                <th scope="col">Drink</th>
                <th scope="col">Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">
                        <img src="https://www.thecocktaildb.com/images/media/drink/yyrwty1468877498.jpg" alt="" style="width:150px;height:150px;">
                    </th>
                    <td>Drink1</td>
                    <td>$3.33</td>
                </tr>
                <tr>
                <th scope="row">
                    <img src="https://www.thecocktaildb.com/images/media/drink/yyrwty1468877498.jpg" alt="" style="width:150px;height:150px;">
                </th>
                    <td>Drink2</td>
                    <td>$3.33</td>
                </tr>
                <tr>
                    <th scope="row">
                        <img src="https://www.thecocktaildb.com/images/media/drink/yyrwty1468877498.jpg" alt="" style="width:150px;height:150px;">
                    </th>
                    <td>Drink3</td>
                    <td>$3.33</td>
                </tr>
            </tbody>
            </table>
        
    </div>
    <div class="col-sm text-center">

        <h3>Your Drinks Have Been Made By Shaun</h3>
        <img src="images/bartender1.PNG" alt="" style="width:150px;height:150px;">
    
    </div>
    
  </div>

  <div class="row">
    <div class="col-sm pt-5 text-center">
        <p class="text-left"><h3>Total Price $9.99</h3></p>
    </div>
  </div>


</div>




</body>
</html>
