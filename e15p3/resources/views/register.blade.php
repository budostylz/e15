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
            <div class="col-sm" style="text-align:center">
                <h2>Register</h2>
            </div>
            <div class="col-sm"></div>
        </div>

    

            <div class="row">
                <div class="col-sm">
                    <label for="exampleInputEmail1">Last Name</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="col-sm">
                    <label for="exampleInputEmail1">First Name</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">            </div>
                <div class="col-sm">
                    <label for="exampleInputEmail1">Middle Initial</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
            </div>

      



        

            <div class="row pt-5">
                <div class="col-sm">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="col-sm">

                <label for="exampleInputEmail1">Are you a Bartender or Customer Ordering Drinks?</label>
                    <select class="custom-select">
                                    <option selected disabled value="">Choose...</option>
                                    <option>Customer</option>
                                    <option>Bartender</option>
                    </select> 

 
                </div>
                <div class="col-sm">



                </div>
            </div>

            <div class="row">

                <div class="col-sm"></div>
                <div class="col-sm">

                    

                </div>
                <div class="col-sm"></div>

            </div>

            <div class="row">
                <div class="col-sm"></div>
                <div class="col-sm text-center pt-5">
                    <button type="submit" class="btn btn-primary bg-dark">Register</button>
                </div>
                <div class="col-sm"></div>
            </div>





            


    </div>

    

</form>



</body>
</html>
