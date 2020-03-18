@extends('layouts.master')


@section('content1')

    <div id="map"></div>
    <div id="pano"></div>

    <form action="" method="post">
            <div class="grid-container">
                <div class="grid-item">
                    <div class="form-group">
                        <label>Find a Place to Drink</label>
                        <input type="text" class="form-control" id="autocomplete" placeholder="Type a Place to Drink">

                    </div>
                </div>


                <div class="grid-item drinkResults">
                    <div class="form-group">
                        <label for="getDrink">Find a Drink</label>
                        <input type="text" class="form-control" id="getDrink" placeholder="Type a Drink">
                        <button type="submit" class="btn btn-primary">Submit</button>

                        
                        <select id="drinkResult"></select>
      
                    </div>

                </div>


                <div class="grid-item">
                    <div>
                        <label id="barName"></label>
                    </div>

                </div>
                <div class="grid-item">
                    <div>
                    <label id="drinkName"></label>

                    </div>
                </div>

                <div class="grid-item">
                    
                    <div>
                        <img id="placePic" src="" alt="No Pic For This Place" height="200" width="200">                       
                    </div>

                </div>

                <div class="grid-item">
                    <div>
                        <img id="drinkPic" src="" alt="Couldn't Find Your Drink" height="200" width="200">                       
                    </div>
                </div>


                <div class="grid-item">
                </div>
                <div class="grid-item">

                <div class="drinkQuantityList">
                <div id="numberOfDrinksDiv">
                    <label>Select Number of Drinks</label>
                        <select id="numberOfDrinks">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                </div>


                </div>
                </div>
        
            </div> 
            <hr>

            <div class="grid-container2">
                <div class="grid-item2">
                    <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1">Are these Orders to Go?</label>
                            <input type="checkbox" class="" id="exampleCheck1">
                    </div> 
                </div>            
            </div> 
            <hr>

            <div class="grid-container2">
                <div class="grid-item2">
                    <div>
                        <label class="form-check-label" for="exampleCheck1">Available Bartenders</label>

                    </div>
                </div>
                
            </div> 

            <div class="grid-container3">
                <div class="grid-item3">
                    <div>
                        <img src="images/bartender.PNG" alt="Smiley face" height="100" width="100">                       
                    </div>
                </div>
                    <div class="grid-item3">
                        <div>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Im a RockStar Bartender"></textarea>
                        </div>
                    </div>
                </div>
                <div class="grid-container4">

                <div class="grid-item4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>


                </div>
        </form>

@endsection


@section('content2')



   <script src="js/drinkModel.js"></script> 

   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAC9uJbDkVAVXfKALyaigk71zOA8Sd6g7o&libraries=places"></script>
   
   <script src="libs/jquery-3.4.1.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.15/lodash.min.js"></script>
  

   <script src="libs/fuse.js"></script>
   <script src="js/barPic.js"></script>
   <script src="js/drinkPic.js"></script>
   <script src="js/placesearch2.js"></script> 

@endsection

