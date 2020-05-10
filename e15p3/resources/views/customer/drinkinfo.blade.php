@extends('layouts.master')

@section('title')
    Drink Info
@endsection


@section('content')

<form method='POST' id="checkoutdrinks" action='/checkoutdrinks'>
    {{ csrf_field() }}

            <div class="row">
                <div class="col-sm text-center"></div>
                <div class="col-sm ml-5 text-center">
                    <h5>{{ $barTitle }} Drinks</h5>
                </div>
                <div class="col-sm">
                </div>
            </div>


             @if(count($barDrinks) == 0)

                <div class="row pt-5">
                    <div class="col-sm">
                        <strong>No Drinks Here</strong>
                    </div>
                </div>
                

            @else

                        @foreach( $barDrinks as $index => $drink )


                            @if($index == 0)
                                <div class="row pt-5">
                            @endif

                            <div class="col-sm">
                                    <input type="checkbox" id="{{ $barTitle }}" name="{{ $drink['title'] }}" value="{{ $drink['pivot']['price'] }}">Check to Order
                                    <p class="text-left">{{ $drink['title'] }}<br/> ${{ $drink['pivot']['price'] }}</p>
                                    <img src="{{ $drink['drink_image'] }}" alt="" style="width:200px;height:200px;">

                            </div>

                             @if($index == 4)
                                </div>
                                <div class="row pt-5">
                                
                            @endif

                            @if($index == 9)
                                </div>
                                
                            @endif
                            
                            
                        @endforeach
            @endif


            

            <div class="row pt-5">
                <div class="col-sm"></div>
                <div class="col-sm"></div>
                <div class="col-sm ml-5 text-center">

                    <button type="submit" class="btn btn-primary bg-dark">Order Drinks</button>
                    <input  style="display:none" type="text" dusk='bar_id-input' id='bar_title' name='bar_title' value='{{ $barTitle }}'>
                    <input  style="display:none" type="text" dusk='bar_id-input' id='bar_id' name='bar_id' value='{{ $barID }}'>

                
                </div>
                <div class="col-sm"></div>
                <div class="col-sm"></div>

            
            </div>





 </form>




@endsection