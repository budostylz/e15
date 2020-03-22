@extends('layouts.master')


@section('drink')

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
                        <label for="getDrink">Type Your Favorite Drink</label>
                        <input type="text" class="form-control" id="drinkUrl" name="drinkUrl" value='{{ old("drinkUrl") }}''>

                        <br/>
                        <input type="text" class="form-control" id="getDrink" name="getDrink" value='{{ old("getDrink")}}' placeholder="Type a Drink">
                        <select id="favoriteDrink" name="favoriteDrink" value='{{ old("favoriteDrink") }}'>
                            <option {{ old("favoriteDrink") == "Select a Drink" ? "selected" : "" }} value='{{ old("favoriteDrink") }}'>{{ old("favoriteDrink") }}</option>
                        </select>
                    </div>
    

                    <div id="drinkResults">
                        <img id="drinkPic" src="" alt="Couldn't Find Your Drink" height="200" width="200" style="">
                        <br />
                        <input id="numberOfDrinks" name="numberOfDrinks" value='{{ old("numberOfDrinks")}}' type="text" placeholder="Type Number of Drinks">
                    </div>

                </div>

                <div class="grid-item">
                        <div class="form-group form-check">      
                            <label class="form-check-label" for="exampleCheck1">Are these Drinks to Go?</label>
                            <div class="btn-group btn-group-toggle" data-toggle="buttons" id="btnCol" name="btnCol">
                                <label class="{{ ( old("drinksToGo") == 'Yes' or $drinksToGo == 'Yes') ? 'btn btn-secondary focus active' : 'btn btn-secondary' }}">
                                    <input 
                                        type="radio" 
                                        name="drinksToGo"
                                        id="drinksToGoYes"  
                                        value='Yes'
                                        {{ ( old("drinksToGo") == 'Yes' or $drinksToGo == 'Yes') ? 'checked' : '' }}
                                    > Yes
                                </label>
                                <label class=" {{ ( old("drinksToGo") == 'No' or $drinksToGo == 'No') ? 'btn btn-secondary focus active' : 'btn btn-secondary' }}  ">
                                    <input 
                                      type="radio" 
                                      name="drinksToGo"
                                      id="drinksToGoNo"   
                                      value='No'
                                      {{ ( old("drinksToGo") == 'No' or $drinksToGo == 'No') ? 'checked' : '' }}
                                    > No
                                </label>
                            </div>

                        </div> 
                </div>
            </div> 
            <hr>
            <div class="grid-container2">

                <div class="errorDiv">
                 @if(count($errors) > 0)
                        <ol class="alert alert-danger error errorItems">
                            @foreach( $errors->all() as $errorItem)
                                <li> {{ $errorItem }} </li>
                            @endforeach
                        </ol>
                    @endif
                
                </div>
                <div class="grid-item">
                        <label class="form-check-label" for="exampleCheck1">Available Servers</label>             
                </div>
                
            </div> 

            <div class="grid-container3">
                <div class="grid-item">
                    <div>
                        <img src="images/bartender.PNG" height="100" width="100">   
                        <label class="form-check-label">I'm a Rockstar Server.</label>
                    </div>

                </div>
                <div class="grid-item">
                    <div>
                        <img src="images/bartender2.PNG" height="100" width="100">   
                        <label class="form-check-label">My Mixing Skills are Star Trek.</label>
                   </div>
                </div>


            </div>
                <div class="grid-container4">

                    <div class="grid-item">
                        <button type="submit" class="btn btn-primary">Order Drink</button>

                    </div>

                   

                </div>
        </form>

@endsection

