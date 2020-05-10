@extends('layouts.master')

@section('title')
    Drink Info
@endsection


@section('content')
<form method='POST' action='/checkoutdrinks'>
                    {{ csrf_field() }}


            <div class="row">
                <div class="col-sm text-center"></div>
                <div class="col-sm pt-2 text-center">
                    <h5>Bar Louie Drinks</h5>
                </div>
                <div class="col-sm"></div>
            </div>


            <div class="row pt-5">
                <div class="col-sm">
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">Check to Order
                    <p class="text-left">Drink1<br/> $3.00</p>
                    <p class="text-left"><a href="/drinkdetails">Drink Details</a></p>
                    <img src="https://www.thecocktaildb.com/images/media/drink/yyrwty1468877498.jpg" alt="" style="width:200px;height:200px;">
                </div>
                <div class="col-sm">
                    <input type="checkbox" id="vehicle12" name="vehicle12" value="Bike2">Check to Order
                    <p class="text-left">Drink2<br/> $3.00</p>
                    <p class="text-left"><a href="/drinkdetails">Drink Details</a></p>
                    <img src="https://www.thecocktaildb.com/images/media/drink/yyrwty1468877498.jpg" alt="" style="width:200px;height:200px;">
                </div>
                <div class="col-sm">
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">Check to Order
                    <p class="text-left">Drink3<br/> $3.00</p>
                    <p class="text-left"><a href="/drinkdetails">Drink Details</a></p>
                    <img src="https://www.thecocktaildb.com/images/media/drink/yyrwty1468877498.jpg" alt="" style="width:200px;height:200px;">
                </div>
                <div class="col-sm">
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">Check to Order
                    <p class="text-left">Drink4<br/> $3.00</p>
                    <p class="text-left"><a href="/drinkdetails">Drink Details</a></p>
                    <img src="https://www.thecocktaildb.com/images/media/drink/yyrwty1468877498.jpg" alt="" style="width:200px;height:200px;">
                </div>
                <div class="col-sm">
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">Check to Order
                    <p class="text-left">Drink5<br/> $3.00</p>
                    <p class="text-left"><a href="/drinkdetails">Drink Details</a></p>
                    <img src="https://www.thecocktaildb.com/images/media/drink/yyrwty1468877498.jpg" alt="" style="width:200px;height:200px;">
                </div>

              
            </div>

            <div class="row pt-5">
                <div class="col-sm">
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">Check to Order
                    <p class="text-left">Drink6<br/> $3.00</p>
                    <p class="text-left"><a href="/drinkdetails">Drink Details</a></p>
                    <img src="https://www.thecocktaildb.com/images/media/drink/yyrwty1468877498.jpg" alt="" style="width:200px;height:200px;">
                </div>
                <div class="col-sm">
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">Check to Order
                    <p class="text-left">Drink7<br/> $3.00</p>
                    <p class="text-left"><a href="/drinkdetails">Drink Details</a></p>
                    <img src="https://www.thecocktaildb.com/images/media/drink/yyrwty1468877498.jpg" alt="" style="width:200px;height:200px;">
                </div>
                <div class="col-sm">
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">Check to Order
                    <p class="text-left">Drink8<br/> $3.00</p>
                    <p class="text-left"><a href="/drinkdetails">Drink Details</a></p>
                    <img src="https://www.thecocktaildb.com/images/media/drink/yyrwty1468877498.jpg" alt="" style="width:200px;height:200px;">
                </div>
                <div class="col-sm">
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">Check to Order
                    <p class="text-left">Drink9<br/> $3.00</p>
                    <p class="text-left"><a href="/drinkdetails">Drink Details</a></p>
                    <img src="https://www.thecocktaildb.com/images/media/drink/yyrwty1468877498.jpg" alt="" style="width:200px;height:200px;">
                </div>
                <div class="col-sm">
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">Check to Order
                    <p class="text-left">Drink10<br/> $3.00</p>
                    <p class="text-left"><a href="/drinkdetails">Drink Details</a></p>
                    <img src="https://www.thecocktaildb.com/images/media/drink/yyrwty1468877498.jpg" alt="" style="width:200px;height:200px;">
                </div>

            
            </div>

            

            <div class="row pt-5">
                <div class="col-sm"></div>
                <div class="col-sm"></div>
                <div class="col-sm ml-5">

                    <button type="submit" class="btn btn-primary bg-dark">Order Drinks</button>

                
                </div>
                <div class="col-sm"></div>
                <div class="col-sm"></div>

            
            </div>

    </form>     








@endsection