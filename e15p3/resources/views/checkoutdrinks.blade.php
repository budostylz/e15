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

                                 <li class="nav-item active">
                                    <a class="nav-link" href="/checkoutdrinks">Review Order(Customer)</a>
                                 </li>

                                <li class="nav-item active">
                                    <a class="nav-link" href="/signin">Login</a>
                                </li>


                                <li class="nav-item">
                                    <a class="nav-link" href="/">Logout</a>
                                </li>




                            </ul>
                        </div>
                </nav>
        </div>
    
    </div>

    <div class="row">
        <div class="col-sm"></div>
        <div class="col-sm text-center pt-2"><a href="/drinkinfo" class="text-dark"><h2>Click Here To Change Order</h2></a></div>

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

        <h3>Choose A Bar Tender to Serve Your Drink</h3>
        <table class="table table-hover table-dark">
            <thead>
                <tr>
                    <th scope="col">Select Bartender</th>
                    <th scope="col">Bartender</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <label class="radio-inline"><input type="radio" name="optradio"></label>          
                    </td>
                    <td>
                      <div><img src="images/bartender1.PNG" alt="" style="width:150px;height:150px;"></div>
                      <div>Shaun</div>
                    </td>
                </tr>

                <tr>
                  <td>
                        <label class="radio-inline"><input type="radio" name="optradio"></label>          
                  </td>
                  <td>
                      <div><img src="images/bartender2.PNG" alt="" style="width:150px;height:150px;"></div>
                      <div>Fernando</div>
                  </td>


                </tr>


                
            </tbody>
            </table>
        

    

    
    </div>
    
  </div>

  <div class="row">
    <div class="col-sm pt-5 text-center">
        <p class="text-left"><h3>Total Price $9.99</h3></p>
    </div>
  </div>


  <div class="row">
    <div class="col-sm pt-5 text-center">
        <button type="submit" class="btn btn-primary bg-dark">Place Order</button> 
    </div>
  </div>



</div>

</form>



</body>
</html>
