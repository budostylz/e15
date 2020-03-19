@extends('layouts.master')


@section('content1')

    <div id="map"></div>
    <div id="pano"></div>

    <form method="POST" action="/confirm">
       {{ csrf_field() }}

            <div class="grid-container-nav">

                <div class="grid-item drinkResults">

                    <div>
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link active" href="/dict">Drink Dictionary</a>
                            </li>          
                        </ul>
                    </div>
                    <hr />

                
                </div>

            
            
            </div>

            <div class="grid-container">


                <div class="grid-item drinkResults">
                    <div class="form-group">
                        <label for="getDrink">Select a Drink Below</label>
                        <br/>
                        <input type="text" class="form-control" id="getDrink" placeholder="Type a Drink">
                        <select id="drinkResult"></select>
                    </div>
    

                    <div id="drinkResults">
                        <img id="drinkPic" src="" alt="Couldn't Find Your Drink" height="200" width="200" style="">
                        <br />
                        <input id="numberOfDrinks" type="text" placeholder="Type Number of Drinks">
                    </div>

                </div>

                <div class="grid-item">
                    <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1">Are these Drinks to Go?</label>
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary">
                                    <input type="radio" name="options" id="option2"> Yes
                                </label>
                                <label class="btn btn-secondary">
                                    <input type="radio" name="options" id="option3"> No
                                </label>
                            </div>
                    </div> 
                </div>
            </div> 

            <hr>

            <div class="grid-container2">
                <div class="grid-item2">
                    <div>
                        <label class="form-check-label" for="exampleCheck1">Available Servers</label>

                    </div>
                </div>
                
            </div> 

            <div class="grid-container3">
                <div class="grid-item3">
                    <div>
                        <img src="images/bartender.PNG" alt="Smiley face" height="100" width="100">   
                        <label class="form-check-label" for="exampleCheck1">I'm a Rockstar Server</label>
                    
                    </div>
                </div>
            </div>
                <div class="grid-container4">

                    <div class="grid-item4">
                        <button type="submit" class="btn btn-primary">Order Drink</button>
                    </div>


                </div>
        </form>

@endsection


@section('content2')



   <script src="js/drinkModel.js"></script>

   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
   
   <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAC9uJbDkVAVXfKALyaigk71zOA8Sd6g7o&libraries=places"></script>-->
   
   <script src="libs/jquery-3.4.1.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.15/lodash.min.js"></script>
  

   <script src="libs/fuse.js"></script>
   <script src="js/barPic.js"></script>
   <script src="js/drinkPic.js"></script>
   <!--<script src="js/placesearch2.js"></script>-->

@endsection

