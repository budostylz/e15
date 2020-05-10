@extends('layouts.master')

@section('title')
    Bar Locator
@endsection

@section('content')

    <form>

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

                    <select class="custom-select">
                        <option selected disabled>Choose a Bar</option>
                        <option>Bar Louie</option>
                        <option>Irish Pub</option>
                        <option>Bar Miami</option>
                        <option>Saisaki Bar</option>
                        <option>Wild West Tavern</option>

                    </select> 



                
                </div>
                <div class="col-sm pt-2">
                    <button type="submit" class="btn btn-primary bg-dark">Get Bar Info</button>


                
                </div>
            </div>

            <div class="row">
                <div class="col-sm"></div>
                <div class="col-sm text-center pt-5">
                    <!--<h3>No Image Available</h3>-->
                <img src="images/bar/bar1.PNG" alt="" style="width:300px;height:300px;">

                </div>
                <div class="col-sm">
                
                </div>
            </div>



            <div class="row">
                <div class="col-sm">
                </div>
                
                <div class="col-sm text-center pt-5">

                    <h4>Bar Louie</h4>

                    <p class="text-justify">Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam res quas ex communi. At nos hinc posthac, sitientis piros Afros. Petierunt uti sibi concilium totius Galliae in diem certam indicere. Cras mattis iudicium purus sit amet fermentum.</p>

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
                    <a href="/drinkinfo"><div type="submit" class="btn btn-primary bg-dark">Get Drinks</div></a>

                </div>
                <div class="col-sm"></div>
            </div>


    </form>


@endsection