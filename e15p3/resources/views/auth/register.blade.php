@extends('layouts.master')

@section('content')
    <form method='POST' action='{{ route('register') }}'>
        {{ csrf_field() }}

        <div class="container-fluid">

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
                        <input type="text" dusk='last_name-input' class="form-control" id='last_name' name='last_name' value='{{ old('last_name') }}'>
                        @include('geterrors.error-field', ['fieldName' => 'last_name'])

                    </div>
                    <div class="col-sm">
                        <label>First Name</label>
                        <input type="text" dusk='first_name-input' class="form-control" id='first_name' name='first_name' value='{{ old('first_name') }}'>            
                        @include('geterrors.error-field', ['fieldName' => 'first_name'])
                    </div>
                    <div class="col-sm">
                        <label>Middle Initial</label>
                        <input type="text" dusk='middle_initial-input' class="form-control" id='middle_initial' name='middle_initial' value='{{ old('middle_initial') }}'>
                        @include('geterrors.error-field', ['fieldName' => 'middle_initial'])

                    </div>
                </div>



                <div class="row pt-3">
                    <div class="col-sm">
                        <label>Email</label>
                        <input type="email" dusk='email-input' class="form-control" id='email' name='email' value='{{ old('email') }}'>
                        @include('geterrors.error-field', ['fieldName' => 'email'])
                    </div>
                    <div class="col-sm">

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" dusk='password-input' class="form-control" id='password' name='password'>
                            @include('geterrors.error-field', ['fieldName' => 'password'])
                        </div>
                    
                    </div>

                    
                    <div class="col-sm">
                        <label for='password-confirm'>Confirm Password</label>
                        <input id='password-confirm' dusk='password-confirm-input' class="form-control"type='password' name='password_confirmation'>
                        @include('geterrors.error-field', ['fieldName' => 'password_confirmation'])
                    </div>
                    
                    
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm"></div>
                    <div class="col-sm">
                        <label for='user_name'>User Name</label>
                        <input id='user_name' dusk='user_name-input' class="form-control"  type='text' name='user_name' value='{{ old('user_name') }}' required autofocus>                        
                        @include('geterrors.error-field', ['fieldName' => 'user_name'])

                    
                    </div>
                    <div class="col-sm"></div>


                </div>

                <div class="row pt-3">
                    <div class="col-sm">
                    </div>
                    <div class="col-sm"></div>
                    <div class="col-sm text-center pt-5">
                        <button type="submit" class="btn btn-primary bg-dark">Register</button>
                    </div>
                    <div class="col-sm"></div>
                    
                    <div class="col-sm">
                    </div>
                    
                    
                    </div>
                </div>

            

               

        </div>

    </form>















@endsection
