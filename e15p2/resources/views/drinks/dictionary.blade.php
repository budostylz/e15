@extends('layouts.master')


@section('dictionary')

    <div class="grid-container-nav">
        <div class="grid-item drinkResults">
            <div>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Back to Order</a>
                    </li>          
                </ul>
            </div>
            <hr/>
        </div>
    </div>


    @if(count($drinkArr) == 0)
        <strong>No Drinks Here</strong>

    @else

            <div class="grid-container-dict">
                 @foreach( $drinkArr as $index => $drink )
                       <div class="grid-item">
                            <label id="drinkName">{{ $drink['strDrink'] }} </label>
                            <br/>
                            <img src="{{ $drink['strDrinkThumb'] }}" height="200" width="200">                       
                       </div>
                 @endforeach
            </div>
    @endif

        <div class="grid-container-nav">
        <div class="grid-item drinkResults">
            <div>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Back to Order</a>
                    </li>          
                </ul>
            </div>
            <hr/>
        </div>
    </div>




@endsection
