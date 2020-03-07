<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>View 1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
                           integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
                           crossorigin="anonymous">
    <link rel="stylesheet" href="css/view.css" />

    <!-- Latest compiled and minified CSS -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>

    <form>

        <div class="grid-container">
            <div class="grid-item">
                <div class="form-group">
                    <label for="exampleInputEmail1">Find a Bar</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Type a Place to Drink">
                </div>
            </div>


            <div class="grid-item">
                <div class="form-group">
                    <label for="exampleInputPassword1">Find a Drink</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Type a Drink">
                </div>

            </div>

            <div class="grid-item">
                <div>
                    <img src="images/bar.JPG" alt="Smiley face" height="200" width="200">                       
                </div>

            </div>

            <div class="grid-item">
                <div>
                    <img src="https://www.thecocktaildb.com/images/media/drink/zvsre31572902738.jpg" alt="Smiley face" height="200" width="200">                       
                </div>
            </div>


            <div class="grid-item">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="grid-item">

            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    How Many Drinks?
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">1</a>
                    <a class="dropdown-item" href="#">2</a>
                    <a class="dropdown-item" href="#">3</a>
                    <a class="dropdown-item" href="#">4</a>
                    <a class="dropdown-item" href="#">5</a>
                </div>
            </div>
            </div>
    
        </div> 
         <hr>

        <div class="grid-container2">
            <div class="grid-item2">
                <div class="form-group form-check">
                        <label class="form-check-label" for="exampleCheck1">Are these Orders to Go?</label>
                        <input type="checkbox" class="" id="exampleCheck1">
                </div> 
            </div>            
        </div> 
        <hr>

        <div class="grid-container2">
            <div class="grid-item2">
                <div>
                    <label class="form-check-label" for="exampleCheck1">Available Bartenders</label>

                </div>
            </div>
            
        </div> 

        <div class="grid-container3">
            <div class="grid-item3">
                <div>
                    <img src="images/bartender.PNG" alt="Smiley face" height="100" width="100">                       
                </div>
            </div>
                <div class="grid-item3">
                    <div>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Im a RockStar Bartender"></textarea>
                    </div>
                </div>
            </div>
            <div class="grid-container4">

            <div class="grid-item4">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>


            </div>
    </form>




</body>
</html>
