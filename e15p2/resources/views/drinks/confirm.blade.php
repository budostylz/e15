@extends('layouts.master')


@section('confirm')

    <form method="POST" action="/confirm">
       {{ csrf_field() }}

            <div class="grid-container-nav">

                <div class="grid-item drinkResults">
                    <div>
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link active" href="/">Back to Menu</a>
                            </li>          
                        </ul>
                    </div>
                    <hr />        
                </div>
            </div>
            <div class="grid-container3">
                <div class="grid-item3">
                    <div>
                        <img src="images/bartender.PNG" height="100" width="100">   
                        <p class="form-check-label">
                            Thank you for ordering, drink responsibly.
                        </p>
                    
                    </div>
                </div>
            </div>
            <div class="grid-container3">
                <div class="grid-item3">
                    <div>
                           <label>
                              {{ $numberOfDrinks }}  
                              {{ $drinkResult }} 
                              {{Str::plural('Drink', (int)$numberOfDrinks)}} 
                              {{ ( $drinksToGo == 'Yes' or $drinksToGo == 'No') ? 'to Go.' : 'for Here.' }}
                           </label><br/>
                           <img src="{{ $drinkUrl }}" height="200" width="200">   
                    </div>
                </div>
            </div>
        </form>


@endsection



