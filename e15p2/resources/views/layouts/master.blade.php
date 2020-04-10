

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Drink App</title>
    <link rel="stylesheet" href="css/libStyles.css"/>
    
    <!-- Old css output saas file
        <link rel="stylesheet" href="css/view.css" />
    -->
    <!-- New Laravel Mix css output file-->
    <link rel="stylesheet" href="css/app.css" />

</head>
<body>

    @yield('drink')
    @yield('dictionary')
    @yield('confirm')

<!-- Don't Need These Anymore
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.15/lodash.min.js"></script>
   <script src="libs/fuse.js"></script>
   <script src="js/drinkModel.js"></script>
   <script src="js/drink.js"></script>

   -->

<!-- Behold Our Bundle JS File -->
    <script src="js/bundle.js"></script>



</body>
</html>


