

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Drink App</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
    
    <!-- Old css file
        <link rel="stylesheet" href="css/view.css" />
    -->
    <!-- New Laravel Mix css file-->
    <link rel="stylesheet" href="css/app.css" />

</head>
<body>

    @yield('drink')
    @yield('dictionary')
    @yield('confirm')

   <script src="js/drinkModel.js"></script>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
   <script src="libs/jquery-3.4.1.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.15/lodash.min.js"></script>
   <script src="libs/fuse.js"></script>
   <script src="js/drink.js"></script>


</body>
</html>


