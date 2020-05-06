@extends('layouts.master')

@section('content')
    <form method='POST' action='{{ route('register') }}'>
        {{ csrf_field() }}

        <div class="container-fluid">
            <div class="row">
                <div class="col-xl">

                    <nav class="navbar navbar-expand-xl navbar-dark bg-dark">
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/barlocator">Home</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="/bartenderreview">Review Order(Bar Tender)</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="/checkoutdrinks">Review Order(Customer)</a>
                                    </li>

                                    <li class="nav-item active">
                                        <a class="nav-link" href="/signin">Login</a>
                                    </li>


                                    <li class="nav-item">
                                        <a class="nav-link" href="/">Logout</a>
                                    </li>




                                </ul>
                            </div>
                    </nav>
                </div>
            
            </div>

            <div class="row">
                <div class="col-sm"></div>
                <div class="col-sm" style="text-align:center">
                    <h2>Register</h2>
                </div>
                <div class="col-sm"></div>
            </div>

                <div class="row">
                    <div class="col-sm">
                        <label>Last Name</label>
                        <input type="text" class="form-control" id='lastname' name='lastname' value='{{ old('lastname') }}'>

                    </div>
                    <div class="col-sm">
                        <label>First Name</label>
                        <input type="text" class="form-control" id='firstname' name='firstname' value='{{ old('firstname') }}'>            
                        @include('geterrors.error-field', ['fieldName' => 'firstname'])
                    </div>
                    <div class="col-sm">
                        <label>Middle Initial</label>
                        <input type="text" class="form-control" id='mi' name='mi' value='{{ old('mi') }}'>
                        @include('geterrors.error-field', ['fieldName' => 'mi'])

                    </div>
                </div>



                <div class="row pt-5">
                    <div class="col-sm">
                        <label>Email</label>
                        <input type="email" class="form-control" id='email' name='email' value='{{ old('email') }}'>
                        @include('geterrors.error-field', ['fieldName' => 'email'])
                    </div>
                    <div class="col-sm">

                    <label>Are you a Bartender or Customer Ordering Drinks?</label>
                        <select class="custom-select" id='customer_or_bartender' name='customer_or_bartender' value='{{ old('customer_or_bartender') }}'>
                                        <option selected disabled value="">Choose...</option>
                                        <option>Customer</option>
                                        <option>Bartender</option>
                        </select> 
                        @include('geterrors.error-field', ['fieldName' => 'customer_or_bartender'])

                    </div>
                    <div class="col-sm"></div>
                </div>

                <div class="row">

                    <div class="col-sm"></div>
                    <div class="col-sm"></div>
                    <div class="col-sm"></div>

                </div>

                <div class="row">
                    <div class="col-sm"></div>
                    <div class="col-sm text-center pt-5">
                        <button type="submit" class="btn btn-primary bg-dark">Register</button>
                    </div>
                    <div class="col-sm"></div>
                </div>

        </div>

    </form>















@endsection