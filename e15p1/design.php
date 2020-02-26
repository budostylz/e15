<?php


 

 function palindrome($_userStr, $_resultsCol)
 {
    //var_dump($_userStr, $_resultsCol[0]);
    $userArray = str_split($_userStr);
    $userArrayReversed = array_reverse($userArray);


    for($i = 0; $i < count($userArray); $i++){

      $nonReverseValue = strtolower($userArray[$i]);
      $reverseValue = strtolower($userArrayReversed[$i]);

      if($nonReverseValue != $reverseValue){
        //var_dump('nonReverse: '.$nonReverseValue, 'Reverse: '.$reverseValue);
        //var_dump( nl2br("\n") );
        //var_dump('Not a Palindrome');
        $_resultsCol[0] = FALSE;

      }/*else{
        var_dump('nonReverse: '.$nonReverseValue, 'Reverse: '.$reverseValue);
        var_dump( nl2br("\n") );
        var_dump('Palindrome');
      }*/

    }
    
    //var_dump( nl2br("\n") );
    //var_dump($_resultsCol[0]);

    return $_resultsCol;



 }

 function vowelCount($_userStr2, $_resultsCol2)
 {
  $userArray = str_split($_userStr2);
  $vowelArr = ['a', 'e', 'i', 'o', 'u'];
  $vowelCount = 0;

  for($i = 0; $i < count($userArray); $i++){
      
    $userStrValue = strtolower($userArray[$i]);
    $vowelSearch = array_search($userStrValue, $vowelArr);

    if(strtolower(gettype($vowelSearch)) === "integer"){
      $vowelCount++;
    }

  }
  
  $_resultsCol2[1] = $vowelCount;
  return $_resultsCol2;


 }

 function letterShift($_userStr3, $_resultsCol3)
 {

  $userArray = str_split($_userStr3);
  $alphabetArr = ['A','B','C','D','E', 
                  'F','G','H','I','J',
                  'K','L','M','N','O',
                  'P','Q','R','S','T',
                  'U','V','W','X','Y','Z'];

  $newStrArr = [];


    foreach($userArray as $key => $value) {

      $userStrValue = strtoupper($value);

      //letter shift
      $letterSearch = array_search($userStrValue, $alphabetArr);
      $newLetter = $alphabetArr[$letterSearch + 1];
    
      //var_dump($userStrValue, $letterSearch);

      //var_dump($newLetter);

      //case test 
      $getCharCase = (ctype_upper($value)) ? strtoupper($newLetter) : strtolower($newLetter);     
      //var_dump($getCharCase);    
      array_push($newStrArr, $getCharCase);

      
      //var_dump($getCharCase);



  }

  //var_dump( nl2br("\n") );
  
  //var_dump($newStrArr);

  //var_dump( nl2br("\n") );

  //var_dump( implode($newStrArr) );

  $_resultsCol3[2] = implode($newStrArr);
  return $_resultsCol3;

  


 }

 function viewHelper($_resultsCol4)
 {
    $palindromeStr = "";
    $vowelCountStr = "";
    $letterShiftStr = "";
    $strViewCol = [];

    //set palindrome results for view
    ($_resultsCol4[0]) ? array_push($strViewCol, "This is a Palindrome") : array_push($strViewCol, "This is not a Palindrome");
  

    //set vowel count results for view
     array_push($strViewCol, strval($_resultsCol4[1]));
   

     //set letter shift results for view
     array_push($strViewCol, strval($_resultsCol4[2]));

     return $strViewCol;

  
  
 }
 
 //drivers        
 if (isset($_POST['submit'])) {




  $userStr = $_POST['userInput'];
  $refineUserString = preg_replace("/[^a-zA-Z]/", "", $userStr);
  $resultsCol = [TRUE, 0, 0];
 
  //var_dump($refineUserString, strlen($refineUserString));
 
  if(strlen($refineUserString) > 0){
   $resultsCol1 = palindrome($refineUserString, $resultsCol);
   $resultsCol2 = vowelCount($refineUserString, $resultsCol1);
   $resultsCol3 = letterShift($refineUserString, $resultsCol2);
   $viewResults = viewHelper($resultsCol3);
 
   
 
   echo $viewResults[0];
   echo nl2br("\n");
   echo $viewResults[1];
   echo nl2br("\n");
   echo $viewResults[2];
 
  
 
  }else{
    //alert user
  }


  
}










 ?>

 
<!DOCTYPE html>
<html>
<title>String Generator</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="css/stringGenerator.css">


<body>

    <div class="container">

        <div class="item"></div>

        <div class="item">

            <form action="" method="post">

                <h2>String Generator</h2>
                <p>Enter a String to Determine Palindrome, Vowel Count and Letter Shift.</p>
                <input name='userInput' type="text">
                <input name="submit" type="submit" class="buttons"></input>

                

                <div class="resultDisplay">
                    <div>
                        <h1>Palindrome?</h1>
                        <div class="results">YES</div>
                    </div>
                    <div>
                        <h1>Vowel Count</h1>
                        <div class="results">0</div>
                    </div>
                    <div>
                        <h1>Letter Shift</h1>
                        <div class="results">wreerds</div>
                    </div>
                </div>
                


            </form>

        </div>

        <div class="item"></div>


    </div>

</body>

</html>


