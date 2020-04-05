<?php


 function palindrome($_userStr, $_resultsCol)
 {
    $userArray = str_split($_userStr);
    $userArrayReversed = array_reverse($userArray);


    for($i = 0; $i < count($userArray); $i++){

      $nonReverseValue = strtolower($userArray[$i]);
      $reverseValue = strtolower($userArrayReversed[$i]);

      if($nonReverseValue != $reverseValue){
        $_resultsCol[0] = FALSE;

      }

    }
    
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
      $letterSearch = array_search($userStrValue, $alphabetArr);
      $newLetter = $alphabetArr[$letterSearch + 1];
      $getCharCase = (ctype_upper($value)) ? strtoupper($newLetter) : strtolower($newLetter);     
      array_push($newStrArr, $getCharCase);


    }

  $_resultsCol3[2] = implode($newStrArr);
  return $_resultsCol3;

 }

 function viewHelper($_resultsCol4)
 {
    $palindromeStr = "";
    $vowelCountStr = "";
    $letterShiftStr = "";
    $strViewCol = [];

    ($_resultsCol4[0]) ? array_push($strViewCol, "Yes") : array_push($strViewCol, "No");
  
     array_push($strViewCol, strval($_resultsCol4[1]));
     array_push($strViewCol, strval($_resultsCol4[2]));

     return $strViewCol;
 
 }

 
 $viewResults = ['','',''];

  if (isset($_POST['submit'])) {

    $userStr = $_POST['userInput'];
    $refineUserString = preg_replace("/[^a-zA-Z]/", "", $userStr);
    $resultsCol = [TRUE, 0, 0];

  
    if(strlen($refineUserString) > 0){
      $resultsCol1 = palindrome($refineUserString, $resultsCol);
      $resultsCol2 = vowelCount($refineUserString, $resultsCol1);
      $resultsCol3 = letterShift($refineUserString, $resultsCol2);
      $viewResults = viewHelper($resultsCol3);
  
    }

}

?>

 
<!DOCTYPE html>
<html>

<head>
  <title>String Generator</title>
  <!-- We Don't Need the Link Tag Anymore
    <link rel="stylesheet" href="css/stringGenerator.css">

  -->
</head>


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
                        <h1>Is <em><?php echo $refineUserString ?></em> a Palindrome?</h1>
                        <div class="results" id="palindrome"><?php echo $viewResults[0]; ?></div>
                    </div>
                    <div>
                        <h1><em><?php echo $refineUserString ?></em> Vowel Count</h1>
                        <div class="results" id="vowelcount"><?php echo $viewResults[1]; ?></div>
                    </div>
                    <div>
                        <h1><em><?php echo $refineUserString ?></em> Letter Shift</h1>
                        <div class="results" id="lettershift"><?php echo $viewResults[2]; ?></div>
                    </div>
                </div>
            </form>
        </div>
        <div class="item"></div>
    </div>
    <!-- Don't Need These Scripts Here Anymore
          <script type="text/javascript" src="libs/jquery-3.4.1.min.js"></script>
          <script type="text/javascript" src="js/hideResults.js"></script>

    -->
    <!-- main.js will be output script file bundle in /dist folder -->
    <script src="main.js"></script>

</body>
</html>


