<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="https://maps.googleapis.com/maps/api/js?json=Bar&types=establishment&key=AIzaSyAC9uJbDkVAVXfKALyaigk71zOA8Sd6g7o&libraries=places"></script>
    <script src="libs/jquery-3.4.1.min.js"></script>
    <script src="js/placeSearch.js"></script>
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
                                <li class="nav-item active">
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
            <div class="col-sm">
            </div>
            <div class="col-sm"></div>
        </div>

    

            <div class="row">
                <div class="col-sm">
                    
                </div>

                <div class="col-sm pt-2 text-center">
                    <input id="autocomplete" placeholder="Enter a Place or Address" type="text" class=" form-control pac-target-input" autocomplete="off">
                    <!-- form-control -->
                </div>
                <div class="col-sm pt-2">
                    <button type="submit" class="btn btn-primary bg-dark">Get Bar Info</button>


                
                </div>
            </div>

            <div class="row">
                <div class="col-sm"></div>
                <div class="col-sm text-center pt-5">
                    <!--<h3>No Image Available</h3>-->
                <img src="images/bar1.PNG" alt="" style="width:300px;height:300px;">

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





            


    </div>

    

</form>



<div id="locationField"><input id="autocomplete" placeholder="Enter a Place or Address" type="text" /></div>
    <div id="map"></div>
    <div id="pano"></div>
    <div class="container-fluid">
        <div class="row" style="overflow: scroll; width: 1200px; height: 500px;">
            <table class="table table-responsive">
                <tr>
                    <td><div id="streetView" style="text-align:right"></div></td>
                </tr>
                <tr>
                    <td><div id="streetView" style="text-align:right"></div></td>
                </tr>
                <tr>
                    <td><div id="placeInfo" ></div></td>
                    <td><div id="reviews" ></div></td>
                </tr>
            </table>
        </div>
    </div>


</body>
</html>
