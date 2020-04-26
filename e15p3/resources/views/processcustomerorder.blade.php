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
    <div class="col-sm text-center"></div>
    <div class="col-sm text-center">

    <div class="col-sm text-center pt-2">

        <h2>@UserName Drink Order</h2>
        <h5><a class="text-dark" href="/bartenderreview">Click Here to Return to Customer List</a></h5>
        
    </div>
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
    <div class="col-sm text-center"></div>
    
  </div>

  <div class="row">
    <div class="col-sm pt-5 text-center">
        <p class="text-left"><h3>Total Price $9.99</h3></p>
        <p class="text-left"><h3>Process Order for Customer to Confirm.</h3></p>
        <button type="submit" class="btn btn-primary bg-dark">Process Order</button> 


    </div>
  </div>





</div>

</form>



</body>
</html>
