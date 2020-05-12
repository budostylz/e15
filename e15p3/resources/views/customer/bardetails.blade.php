@extends('layouts.master')

@section('title')
    Bar Locator
@endsection

@section('content')

    

            <div class="row">
                <div class="col-sm"></div>

                <div class="col-sm pt-2 text-center">

                    <form method='POST' action='/barlocator'>
                        {{ csrf_field() }}
                        <a dusk='select_bar-input' href="/barlocator" class="text-dark"><h2>Click Here To Select Another Bar</h2></a>
                    </form>
                
                </div>
                <div class="col-sm pt-2">


                
                </div>
            </div>

            
<form method='POST' action='/drinkinfo'>
        {{ csrf_field() }}

            <div class="row">
                <div class="col-sm"></div>
                <div class="col-sm text-center pt-5">
                    <!--<h3>No Image Available</h3>-->

                    @if(strlen($barImage) > 0)

                         <img dusk='bar_image-input' src="{{ $barImage }}" alt="" style="width:300px;height:300px;">

                        @else

                        <h2>No Pics Here</h2>

                    @endif

                </div>
                <div class="col-sm">
                
                </div>
            </div>



            <div class="row">
                <div class="col-sm">
                </div>
                
                <div class="col-sm text-center pt-5">


                    @if(strlen($barTitle) > 0  && strlen($barDescription) > 0)

                            <h4 dusk='bar_title-input'>{{ $barTitle }}</h4>
                            <p dusk='bar_desc-input' class="text-justify">{{ $barDescription }}</p>

                        @else

                        <h2>No Bar Details Here</h2>

                    @endif

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

                    <button dusk='get_drinks-input' type="submit" class="btn btn-primary bg-dark">Get Drinks</button>

                </div>
                <div class="col-sm">

                   <input dusk='bar_id-input' style="display:none" type="text" dusk='bar_id-input' id='bar_id' name='bar_id' value='{{ ($barID)  ? $barID : '1' }}'>

                
                </div>
            </div>

    </form>



@endsection