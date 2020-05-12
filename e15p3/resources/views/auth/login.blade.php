<!DOCTYPE html>
<html>
<head>

    <title>@yield('title', 'Bar App')</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>



    <div class="container-fluid">
            <div class="row">
                <div class="col-xl">

                        <nav class="navbar navbar-expand-xl navbar-dark bg-dark">
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="/register">Register</a>
                                        </li>

                                         <li class="nav-item">
                                            <a class="nav-link" href="/">Home</a>
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

                                <label for='user_name'>User Name</label>
                                <input id='user_name' dusk='user_name-input' class="form-control"  type='text' name='user_name' value='{{ old('user_name') }}' autofocus>                        @include('geterrors.error-field', ['fieldName' => 'email'])
                                @include('geterrors.error-field', ['fieldName' => 'user_name'])

                                <label class="pt-3">Password</label>
                                <input type="password" dusk='password-app-input' class="form-control" id='password' name='password'>
                                @include('geterrors.error-field', ['fieldName' => 'password'])

                        
                        </div>
                        <div class="col-sm"></div>
                    </div>

                    <div class="row pt-5">
                        <div class="col-sm text-center">
                            <button type="submit" dusk='signin-input' id="signin" class="btn btn-primary bg-dark">Sign In</button> 
                        </div>
                    </div>

                </form>

    </div>



</body>
</html>
