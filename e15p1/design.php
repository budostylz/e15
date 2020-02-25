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
 $userStr = "noodle";
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


 
 
 //letterShift($refineUserString, $resultsCol2);

 //var_dump( $resultsCol1);

 //var_dump( nl2br("\n") );

 //var_dump($resultsCol2);



 /*


 //main
str, 
resultsCol,
strViewCol


//input(s): string, resultsCol
//output(s): array
function palindrome(str, resultsCol){
  
  resultsCol[0] = true;
  
  strArr = str.ToArray();//turn string to array
  
  strArrReverse = str.ToArrayAndReverse();//turn into array then reverse
  
  for(var i = 0; i < strArr.length; i++){
    for(var j = 0; j < strArrReverse.length; j++){
      
      strArrValue = strArr[i];
      strArrReverseValue = strArr[j];
      
      if(strArrValue != strArrReverseValue){
        
        resultsCol[0] = false.toString();
        
      }

    }
    
  }
  
  return resultsCol;
  
  
}


//input(s): string, resultsCol
//output(s): array
function vowelCount(str, resultsCol){
  
  vowelCounter = 0;
  resultsCol[1] = 0;
  vowelArr = ['A', 'E', 'I', 'O', 'U'];
  strArr = str.ToArray();//turn string to array
  
    for(var i = 0; i < strArr.length; i++){
      
      strArrValue = strArr[i].toUpper();
      vowelTest = vowelArr.find(strArrValue);
      
      if(vowelTest == true){
        vowelCounter++;
        resultsCol[1] = vowelCounter.toString();
      }

    }


  
  return resultsCol;
  
  
}



//input(s): string, resultsCol
//output(s): array
function letterShift(str, resultsCol){
  
  alphabetArr = ['A','B','C',...];
  strArr = str.ToArray();//turn string to array
  newStrArr = [];
  
  for(var i = 0; i < strArr.length; i++){
      
      strArrValue = strArr[i].toUpper();
      charIndex = alphabetArr.indexOf(strArrValue);//current alphabetArr index
      nextCharValue = alphabetArr[charIndex + 1];//next alphabetArr index
      
      //test for upper lower case
      testUpperCaseStr = strArrValue.testUpperCase();
      testUpperCaseAlphabet = nextCharValue.testUpperCase();
      
      if(testUpperCaseStr == testUpperCaseAlphabet){
         nextCharValue.UpperCase();
      }else{
         nextCharValue.UpperCase();
      }
      
      

      
      newStrArr.push(nextCharValue);
      
      

  }

  newStr = newStrArr.ToString();
  resultsCol[2] = newStr;

  return resultsCol;
  
  
}



//input(s): tag, resultsCol:[testPalindrome, vowelCount, letterShift], strViewCol
//output(s): 
function viewHelper(tag, resultsCol, strViewCol){
  
  testPalindromeStr = "";
  vowelCountStr = "";
  letterShiftStr = "";
  
  
  //set palindrome results for view
  if(resultsCol[0] == true){
    testPalindromeStr = "This is a Palindrome";
    strViewCol[0].push(testPalindromeStr);
  }else{
        testPalindromeStr = "This is not a Palindrome";
        strViewCol[0].push(testPalindromeStr);

  }
  
  //set vowel count results for view
  vowelCountStr = "Vowel Count:" + resultsCol[1];
  stringViewCol[1] =  vowelCountStr;
  
  //set letter shift results for view
  letterShiftStr = "Letter Shift Result:" + resultsCol[2];
  stringViewCol[1] =  letterShiftStr;
  

  return strViewCol;
  

  
}





 */