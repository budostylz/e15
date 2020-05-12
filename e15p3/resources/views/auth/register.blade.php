<!DOCTYPE html>
<html>
<head>

    <title>@yield('title', 'Bar App')</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>


    
    
    
    <form method='POST' action='{{ route('register') }}'>
        {{ csrf_field() }}

        <div class="container-fluid">
            <div class="row">
                <div class="col-xl">

                    <nav class="navbar navbar-expand-xl navbar-dark bg-dark">
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="/login">Sign In</a>
                                    </li>
                                    <li class="nav-item">
                                            <a class="nav-link" href="/">Home</a>
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
                    <div class="col-sm">

                     <label>Are you a Bartender or Customer Ordering Drinks?</label>
                        <select dusk='entity_type-input'  class="custom-select" id='entity_type' name='entity_type' value='{{ old('entity_type') }}'>
                                        <option selected disabled value="">Choose...</option>
                                        <option>Customer</option>
                                        <option>Bartender</option>
                        </select> 
                        @include('geterrors.error-field', ['fieldName' => 'entity_type'])

                    
                    </div>

                    
                    <div class="col-sm">
                    </div>
                    
                    
                    </div>
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





</body>
</html>


