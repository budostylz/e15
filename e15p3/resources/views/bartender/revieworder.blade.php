@extends('layouts.master')

@section('title')
    Process Customer Order
@endsection

@section('content')

<form method='POST' id='processcustomerorder' action='/processcustomerorder'>
    {{ csrf_field() }}
<div class="row">
    <div class="col-sm text-center"></div>
    <div class="col-sm text-center">

    <div class="col-sm text-center pt-2">

        <h2>{{ '@'. $userName }} Drink Order</h2>
        <h5><a dusk='customer_redirect-input' class="text-dark" href="/bartenderreview">Click Here to Return to Customer List</a></h5>
        
    </div>
        <table class="table table-hover table-dark">
            
            <tbody>

            @foreach( $orderArr as $key => $drinks )
                <tr>
                    <td scope="row">
                        Order {{ $key }}
                    </td>

                    <td>
                        <table dusk='customer_order-input' class="table table-hover table-dark">
                            @foreach( $drinks as $drinkKey => $drinkValue )
                                    <tr><td>{{ $drinkKey  }}</td><td>{{ $drinkValue }}</td></tr>

                            @endforeach
                        </table>
                    </td>

                </tr>
            @endforeach


            </tbody>
            </table>
        

    
    
    </div>
    <div class="col-sm text-center"></div>
    
  </div>

  <div class="row">
    <div class="col-sm pt-5 text-center">
        <p class="text-left"><h3>Total Price {{ $totalPrice }}</h3></p>
        <p class="text-left"><h3>Process Order for Customer to Confirm.</h3></p>
        <button dusk='process_order-input' type="submit" class="btn btn-primary bg-dark">Process Order</button> 
        <input style="display:none" type="text" dusk='user_id-input' id='user_id' name='user_id' value='{{ $userID }}'>



    </div>
  </div>

</form>

    


@endsection