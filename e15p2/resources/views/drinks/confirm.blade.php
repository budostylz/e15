@extends('layouts.master')


@section('confirm')
            <div class="grid-container-nav">

                <div class="grid-item drinkResults">
                    <div>
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link active" href="/">Back to Menu</a>
                            </li>  
                            <li class="nav-item">
                                <a class="nav-link active" href="/dict">Drink Dictionary</a>
                            </li>          
        
                        </ul>
                    </div>
                    <hr />        
                </div>
            </div>
            <div class="grid-container2">
                <div class="grid-item2">
                    <div>
                        <img src="images/bartender.PNG" height="100" width="100">   
                        <p class="form-check-label">
                            Thank you for ordering, drink responsibly.
                        </p>
                    
                    </div>
                </div>
            </div>
            <div class="grid-container2">
                <div class="grid-item2">
                    <div>
                           <label>
                              {{ $numberOfDrinks }}  
                              {{ $drinkResult }} 
                              {{Str::plural('Drink', (int)$numberOfDrinks)}} 
                              {{ (filter_var($drinksToGo, FILTER_VALIDATE_BOOLEAN)) ? 'to Go.' : 'for Here.' }}
                           </label><br/>
                           <img src="{{ $drinkUrl }}" height="200" width="200">   
                    </div>
                </div>
            </div>


@endsection



