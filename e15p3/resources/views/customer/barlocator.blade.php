@extends('layouts.master')

@section('title')
    Bar Locator
@endsection

@section('content')

    <form method='POST' action='/bardetails'>
        {{ csrf_field() }}

            <div class="row pt-3">
                <div class="col-sm"></div>
                <div class="col-sm text-center">
                    <h2>
                        @if(Auth::user())
                            Welcome Back {{ Auth::user()->first_name }}                                
                        @endif            
                    </h2>            
                </div>
                <div class="col-sm"></div>
            </div>


            <div class="row">
                <div class="col-sm"></div>

                <div class="col-sm pt-2 text-center">

                    <select class="custom-select" id="bar" name="bar" value='{{ old("bar") }}'>
                        <option selected disabled>Choose a Bar</option>
                        <option>Bar Louie</option>
                        <option>Mulligan’s Irish Pub</option>
                        <option>Astra Miami</option>
                        <option>The Oden</option>
                        <option>Mr. Wright's Gold Digger Saloon</option>

                    </select> 
                    @include('geterrors.error-field', ['fieldName' => 'bar'])




                
                </div>
                <div class="col-sm pt-2">
                    <button type="submit" class="btn btn-primary bg-dark">Get Bar Info</button>
   
                </div>
            </div>



    </form>


@endsection