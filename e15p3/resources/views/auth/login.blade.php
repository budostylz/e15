@extends('layouts.master')

@section('content')



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

            <form method='POST' action='{{ route('login') }}'>
                {{ csrf_field() }}

                    <div class="row">
                        <div class="col-sm"></div>
                        <div class="col-sm text-center pt-2">
                            <h2>Sign In</h2>
                        </div>
                        <div class="col-sm"></div>
                    </div>

                    <div class="row">
                        <div class="col-sm"></div>
                        <div class="col-sm">

                            <div class="form-group">
                                <label>User Name</label>
                                <input type="text" class="form-control" id='username' type='username' name='username' value='{{ old('username') }}' required autofocus>
                                @include('includes.error-field', ['fieldName' => 'username'])

                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" id='password' name='password' required>
                                @include('includes.error-field', ['fieldName' => 'password'])
                            </div>

                        
                        </div>
                        <div class="col-sm"></div>
                    </div>

                    <div class="row">
                        <div class="col-sm text-center">
                            <button type="submit" class="btn btn-primary bg-dark">Sign In</button> 
                        </div>
                    </div>

                </form>

    </div>


           
@endsection