@extends('layouts.master')

@section('title')
    Customer Review
@endsection

@section('content')

    <div class="row pt-5">
        <div class="col-sm"></div>
        <div class="col-sm" style="text-align:center">
            <h2>Click Customer to View Pending Order</h2>
        </div>
        <div class="col-sm"></div>
    </div>

    <div class="row">
        <div class="col-sm"></div>
        <div class="col-sm">

        <ul class="list-group text-center">
                

            


            @if(count($userArr) == 0)
                        <strong>No Drinks Here</strong>

                    @else

                        @foreach( $userArr as $key => $value )

                            <li class="list-group-item">
                                <form method='POST' id='processcustomerorder' action='/processcustomerorder'>
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-primary bg-dark">{{ $value }}</button>
                                    <input readonly style="display:none" type="text" dusk='user_id-input' id='user_id' name='user_id' value='{{ $key }}'>
                                    <input readonly style="display:none" type="text" dusk='user_name-input' id='user_name' name='user_name' value='{{ $value }}'>
                                </form> 
                            </li>
                            
                        @endforeach
            @endif



        </ul>

        
        </div>
        <div class="col-sm"></div>
    </div>


    


@endsection