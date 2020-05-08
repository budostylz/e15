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

        <div class="row pt-3">
            <div class="col-sm"></div>
            <div class="col-sm text-center">
                <h2>
                    @if(Auth::user())
                        Welcome Back {{ Auth::user()->first_name }}                                
                    @endif            
                </h2>            
            </div>
            <div class="col-sm"></div>
        </div>

    <form>

            <div class="row">
                <div class="col-sm">
                </div>

                <div class="col-sm pt-2 text-center">

                    <select class="custom-select">
                        <option selected disabled>Choose a Bar</option>
                        <option>Bar Louie</option>
                        <option>Irish Pub</option>
                        <option>Bar Miami</option>
                        <option>Saisaki Bar</option>
                        <option>Wild West Tavern</option>

                    </select> 



                
                </div>
                <div class="col-sm pt-2">
                    <button type="submit" class="btn btn-primary bg-dark">Get Bar Info</button>


                
                </div>
            </div>

            <div class="row">
                <div class="col-sm"></div>
                <div class="col-sm text-center pt-5">
                    <!--<h3>No Image Available</h3>-->
                <img src="images/bar/bar1.PNG" alt="" style="width:300px;height:300px;">

                </div>
                <div class="col-sm">
                
                </div>
            </div>



            <div class="row">
                <div class="col-sm">
                </div>
                
                <div class="col-sm text-center pt-5">

                    <h4>Bar Louie</h4>

                    <p class="text-justify">Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam res quas ex communi. At nos hinc posthac, sitientis piros Afros. Petierunt uti sibi concilium totius Galliae in diem certam indicere. Cras mattis iudicium purus sit amet fermentum.</p>

                </div>
                <div class="col-sm">
                
                </div>
            </div>

            <div class="row">
                <div class="col-sm">
                </div>
                <div class="col-sm">
                </div>
                <div class="col-sm">



                </div>
            </div>


            <div class="row">
                <div class="col-sm"></div>
                <div class="col-sm text-center pt-5">
                    <a href="/drinkinfo"><div type="submit" class="btn btn-primary bg-dark">Get Drinks</div></a>

                </div>
                <div class="col-sm"></div>
            </div>


    </form>


            


    </div>

    




</body>
</html>
