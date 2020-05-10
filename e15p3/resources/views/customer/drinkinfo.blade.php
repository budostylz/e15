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
                    <input type="checkbox" id="drink1" name="drink1" value="drink1">Check to Order
                    <p class="text-left">Drink1<br/> $3.00</p>
                    <p class="text-left"><a href="/drinkdetails">Drink Details</a></p>
                    <img src="https://www.thecocktaildb.com/images/media/drink/yyrwty1468877498.jpg" alt="" style="width:200px;height:200px;">
                </div>
                <div class="col-sm">
                    <input type="checkbox" id="drink2" name="drink2" value="drink2">Check to Order
                    <p class="text-left">Drink2<br/> $3.00</p>
                    <p class="text-left"><a href="/drinkdetails">Drink Details</a></p>
                    <img src="https://www.thecocktaildb.com/images/media/drink/yyrwty1468877498.jpg" alt="" style="width:200px;height:200px;">
                </div>
                <div class="col-sm">
                    <input type="checkbox" id="drink3" name="drink3" value="drink3">Check to Order
                    <p class="text-left">Drink3<br/> $3.00</p>
                    <p class="text-left"><a href="/drinkdetails">Drink Details</a></p>
                    <img src="https://www.thecocktaildb.com/images/media/drink/yyrwty1468877498.jpg" alt="" style="width:200px;height:200px;">
                </div>
                <div class="col-sm">
                    <input type="checkbox" id="drink4" name="drink4" value="drink4">Check to Order
                    <p class="text-left">Drink4<br/> $3.00</p>
                    <p class="text-left"><a href="/drinkdetails">Drink Details</a></p>
                    <img src="https://www.thecocktaildb.com/images/media/drink/yyrwty1468877498.jpg" alt="" style="width:200px;height:200px;">
                </div>
                <div class="col-sm">
                    <input type="checkbox" id="drink5" name="drink5" value="drink5">Check to Order
                    <p class="text-left">Drink5<br/> $3.00</p>
                    <p class="text-left"><a href="/drinkdetails">Drink Details</a></p>
                    <img src="https://www.thecocktaildb.com/images/media/drink/yyrwty1468877498.jpg" alt="" style="width:200px;height:200px;">
                </div>

              
            </div>

            <div class="row pt-5">
                <div class="col-sm">
                    <input type="checkbox" id="drink6" name="drink6" value="drink6">Check to Order
                    <p class="text-left">Drink6<br/> $3.00</p>
                    <p class="text-left"><a href="/drinkdetails">Drink Details</a></p>
                    <img src="https://www.thecocktaildb.com/images/media/drink/yyrwty1468877498.jpg" alt="" style="width:200px;height:200px;">
                </div>
                <div class="col-sm">
                    <input type="checkbox" id="drink7" name="drink7" value="drink7">Check to Order
                    <p class="text-left">Drink7<br/> $3.00</p>
                    <p class="text-left"><a href="/drinkdetails">Drink Details</a></p>
                    <img src="https://www.thecocktaildb.com/images/media/drink/yyrwty1468877498.jpg" alt="" style="width:200px;height:200px;">
                </div>
                <div class="col-sm">
                    <input type="checkbox" id="drink8" name="drink8" value="drink8">Check to Order
                    <p class="text-left">Drink8<br/> $3.00</p>
                    <p class="text-left"><a href="/drinkdetails">Drink Details</a></p>
                    <img src="https://www.thecocktaildb.com/images/media/drink/yyrwty1468877498.jpg" alt="" style="width:200px;height:200px;">
                </div>
                <div class="col-sm">
                    <input type="checkbox" id="drink9" name="drink9" value="drink9">Check to Order
                    <p class="text-left">Drink9<br/> $3.00</p>
                    <p class="text-left"><a href="/drinkdetails">Drink Details</a></p>
                    <img src="https://www.thecocktaildb.com/images/media/drink/yyrwty1468877498.jpg" alt="" style="width:200px;height:200px;">
                </div>
                <div class="col-sm">
                    <input type="checkbox" id="drink10" name="vdrink10" value="drink10">Check to Order
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