@extends('layouts.master')

@section('content')



    <div class="container-fluid">

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

                                <label for='user_name'>User Name</label>
                                <input id='user_name' dusk='user_name-input' class="form-control"  type='text' name='user_name' value='{{ old('user_name') }}' required autofocus>                        @include('geterrors.error-field', ['fieldName' => 'email'])
                                @include('geterrors.error-field', ['fieldName' => 'user_name'])

                                <label class="pt-3">Password</label>
                                <input type="password" dusk='password-input' class="form-control" id='password' name='password'>
                                @include('geterrors.error-field', ['fieldName' => 'password'])

                        
                        </div>
                        <div class="col-sm"></div>
                    </div>

                    <div class="row pt-3">
                        <div class="col-sm text-center">
                            <button type="submit" class="btn btn-primary bg-dark">Sign In</button> 
                        </div>
                    </div>

                </form>

    </div>


           
@endsection