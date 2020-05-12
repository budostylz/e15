@extends('layouts.master')

@section('title')
    Customer Confirmation
@endsection

@section('content')

<form method='POST' id='processcustomerorder' action='/processcustomerorder'>
    {{ csrf_field() }}
<div class="row">
    <div class="col-sm text-center"></div>
    <div class="col-sm text-center">

    <div class="col-sm text-center pt-2">

        <h2>Your Drink Order</h2>
        
    </div>
        <table class="table table-hover table-dark">
            
            <tbody>

            @foreach( $orderArr as $key => $drinks )
                <tr>
                    <td scope="row">
                        Order {{ $key }}
                    </td>

                    <td>
                        <table class="table table-hover table-dark">
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



    </div>
  </div>

</form>

    


@endsection