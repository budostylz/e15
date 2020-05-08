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

                                <li class="nav-item">
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


    

            <div class="row">
                <div class="col-sm text-center"></div>
                <div class="col-sm pt-2 text-center">
                    <h5>Bar Louie Drinks</h5>
                </div>
                <div class="col-sm"></div>
            </div>

           



            <div class="row pt-5">
                <div class="col-sm">
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">Check to Order
                    <p class="text-left">Drink1<br/> $3.00</p>
                    <p class="text-left"><a href="/drinkdetails">Drink Details</a></p>
                    <img src="https://www.thecocktaildb.com/images/media/drink/yyrwty1468877498.jpg" alt="" style="width:200px;height:200px;">
                </div>
                <div class="col-sm">
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">Check to Order
                    <p class="text-left">Drink2<br/> $3.00</p>
                    <p class="text-left"><a href="/drinkdetails">Drink Details</a></p>
                    <img src="https://www.thecocktaildb.com/images/media/drink/yyrwty1468877498.jpg" alt="" style="width:200px;height:200px;">
                </div>
                <div class="col-sm">
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">Check to Order
                    <p class="text-left">Drink3<br/> $3.00</p>
                    <p class="text-left"><a href="/drinkdetails">Drink Details</a></p>
                    <img src="https://www.thecocktaildb.com/images/media/drink/yyrwty1468877498.jpg" alt="" style="width:200px;height:200px;">
                </div>
                <div class="col-sm">
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">Check to Order
                    <p class="text-left">Drink4<br/> $3.00</p>
                    <p class="text-left"><a href="/drinkdetails">Drink Details</a></p>
                    <img src="https://www.thecocktaildb.com/images/media/drink/yyrwty1468877498.jpg" alt="" style="width:200px;height:200px;">
                </div>
                <div class="col-sm">
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">Check to Order
                    <p class="text-left">Drink5<br/> $3.00</p>
                    <p class="text-left"><a href="/drinkdetails">Drink Details</a></p>
                    <img src="https://www.thecocktaildb.com/images/media/drink/yyrwty1468877498.jpg" alt="" style="width:200px;height:200px;">
                </div>

              
            </div>

            <div class="row pt-5">
                <div class="col-sm">
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">Check to Order
                    <p class="text-left">Drink6<br/> $3.00</p>
                    <p class="text-left"><a href="/drinkdetails">Drink Details</a></p>
                    <img src="https://www.thecocktaildb.com/images/media/drink/yyrwty1468877498.jpg" alt="" style="width:200px;height:200px;">
                </div>
                <div class="col-sm">
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">Check to Order
                    <p class="text-left">Drink7<br/> $3.00</p>
                    <p class="text-left"><a href="/drinkdetails">Drink Details</a></p>
                    <img src="https://www.thecocktaildb.com/images/media/drink/yyrwty1468877498.jpg" alt="" style="width:200px;height:200px;">
                </div>
                <div class="col-sm">
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">Check to Order
                    <p class="text-left">Drink8<br/> $3.00</p>
                    <p class="text-left"><a href="/drinkdetails">Drink Details</a></p>
                    <img src="https://www.thecocktaildb.com/images/media/drink/yyrwty1468877498.jpg" alt="" style="width:200px;height:200px;">
                </div>
                <div class="col-sm">
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">Check to Order
                    <p class="text-left">Drink9<br/> $3.00</p>
                    <p class="text-left"><a href="/drinkdetails">Drink Details</a></p>
                    <img src="https://www.thecocktaildb.com/images/media/drink/yyrwty1468877498.jpg" alt="" style="width:200px;height:200px;">
                </div>
                <div class="col-sm">
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">Check to Order
                    <p class="text-left">Drink10<br/> $3.00</p>
                    <p class="text-left"><a href="/drinkdetails">Drink Details</a></p>
                    <img src="https://www.thecocktaildb.com/images/media/drink/yyrwty1468877498.jpg" alt="" style="width:200px;height:200px;">
                </div>

            
            </div>

            

            <div class="row pt-5">
                <div class="col-sm"></div>
                <div class="col-sm"></div>
                <div class="col-sm ml-5">

                    <a href="/checkoutdrinks"><div type="submit" class="btn btn-primary bg-dark">Order Drinks</div></a>

                
                </div>
                <div class="col-sm"></div>
                <div class="col-sm"></div>

            
            </div>

            




            




        </div>


</form>



</body>
</html>
