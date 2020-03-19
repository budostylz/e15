@extends('layouts.master')


@section('dictionary')

    <div>Dictionary Results</div>

    @if(count($drinkArr) == 0)
        <strong>No Drinks Here</strong>

    @else
        @foreach($drinkArr as $slug => $drink)

             <label id="drinkName"> {{ $drink['strDrink'] }} </label>
             <br/>

             <div> 
                <img src="{{ $drink['strDrinkThumb'] }}" height="200" width="200">                       
             </div>

             
        @endforeach


    @endif

    


@endsection
