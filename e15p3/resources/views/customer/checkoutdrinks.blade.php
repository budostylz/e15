@extends('layouts.master')

@section('title')

Check Out Drinks

@endsection

@section('content')

    <div class="row">
        <div class="col-sm"></div>
        <div class="col-sm text-center pt-2">


        </div>

        <div class="col-sm"></div>
    </div>


<form method='POST' id='customerconfirmation' action='/customerconfirmation'>
                    {{ csrf_field() }}


  <div class="row">
    <div class="col-sm text-center">
        <h3>{{ $barTitle }} Drink Order</h3>
        <table class="table table-hover table-dark">
            <thead>
                <tr>
                <th scope="col">Drink</th>
                <th scope="col">Price</th>
                </tr>
            </thead>
            <tbody>

            
            @if(count($barDrinks) == 0)
                <strong>No Drinks Here</strong>

            @else

                    <div class="grid-container-dict">
                        @foreach( $barDrinks as $key => $value )

                            <tr>
                                <td>
                                    
                                   <input readonly type="text" id="{{ $key }}" name="{{ $key }}" value="{{ $key }}">

                                </td>
                                <td>
                                     
                                    <input readonly type="text" id="{{ $key }}" name="{{ $key }}" value="{{ $value }}">

                                </td>
                            </tr>
                            
                        @endforeach
                    </div>
            @endif


            </tbody>
            </table>
        
    </div>
    <div class="col-sm text-center">

        <h3>Choose A Bar Tender to Serve Your Drink</h3>
        <table class="table table-hover table-dark">
            <thead>
                <tr>
                    <th scope="col">Select Bartender</th>
                    <th scope="col">Bartender</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <label class="radio-inline">
                            <input 
                                checked="checked"
                                type="radio" 
                                name="optradio" 
                                value="1"
                                {{ ( old("optradio") == '1') ? 'checked' : '' }}
                            >
                            @include('geterrors.error-field', ['fieldName' => 'optradio'])

                        </label>          
                    </td>
                    <td>
                      <div><img src="images/bartender1.PNG" alt="" style="width:150px;height:150px;"></div>
                      <div>Shaun</div>
                    </td>
                </tr>

                <tr>
                  <td>
                        <label class="radio-inline">
                            <input 
                                type="radio" 
                                name="optradio" 
                                value="2"
                                {{ ( old("optradio") == '2') ? 'checked' : '' }}
                            >
                             @include('geterrors.error-field', ['fieldName' => 'optradio'])

                        </label>          
                  </td>
                  <td>
                      <div><img src="images/bartender2.PNG" alt="" style="width:150px;height:150px;"></div>
                      <div>Fernando</div>
                  </td>


                </tr>


                
            </tbody>
            </table>
        

    

    
    </div>
    
  </div>

  <div class="row">
    <div class="col-sm pt-5 text-center">
        <p class="text-left"><h3>Total Price {{ $totals }}</h3></p>
    </div>
  </div>


  <div class="row">
    <div class="col-sm pt-5 text-center">
        <button dusk='place_order-input'style="{{ ( count($barDrinks) == 0) ? 'display:none' : ''  }}"type="submit" class="btn btn-primary bg-dark">Place Order</button> 
    </div>
  </div>

    <input  style="display:none" type="text" dusk='bar_id-input' id='bar_id' name='bar_id' value='{{ $barID }}'>
    <input  style="display:none" type="text" dusk='total_price-input' id='total_price' name='total_price' value='{{ $totals }}'>


  </form>


@endsection