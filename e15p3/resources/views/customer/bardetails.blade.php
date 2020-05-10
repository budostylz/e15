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
                        <a href="/barlocator" class="text-dark"><h2>Click Here To Select Another Bar</h2></a>
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
                <img src="{{ $barImage }}" alt="" style="width:300px;height:300px;">

                </div>
                <div class="col-sm">
                
                </div>
            </div>



            <div class="row">
                <div class="col-sm">
                </div>
                
                <div class="col-sm text-center pt-5">

                    <h4>{{ $barTitle }}</h4>

                    <p class="text-justify">{{ $barDescription }}</p>

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
                    <button type="submit" class="btn btn-primary bg-dark">Get Drinks</button>

                </div>
                <div class="col-sm">

                   <input style="display:none" type="text" dusk='bar_id-input' id='bar_id' name='bar_id' value='{{ ($barID)  ? $barID : '1' }}'>

                
                </div>
            </div>

    </form>



@endsection