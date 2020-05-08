<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    * {
    box-sizing: border-box;
    }

    body {
    margin: 0;
    font-family: Arial;
    font-size: 17px;
    }

    #drinkVid {
    position: fixed;
    right: 0;
    bottom: 0;
    min-width: 100%; 
    min-height: 100%;
    }

    .content {
      position: fixed;
      bottom: 0;
      background: rgba(0, 0, 0, 0.5);
      color: #f1f1f1;
      width: 100%;
      padding: 20px;
    }

    #myBtn {
      width: 200px;
      font-size: 18px;
      text-align:center;
      padding: 10px;
      border: none;
      background: #000;
      color: #fff;
    }

 


    </style>
</head>
<body>

<video autoplay loop muted playsinline id="drinkVid">
  <source src="vids/drink.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>

<div class="content">
  
  
<div class="container">
  <div class="row">
    <div class="col">
        <a href="/login"><div id="myBtn">Sign In</div></a>
    </div>
    <div class="col-5">
    <h1>Welcome to Bar App</h1>
    </div>
    <div class="col">
        <a href="/register"><div id="myBtn">Register</div></a>
    </div>
  </div>

</div>



</div>



</body>
</html>
