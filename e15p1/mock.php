<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="css/stringGenerator.css">


<body>

    <div class="container">

        <div class="item"></div>

        <div class="item">

            <form method='GET' action='design.php'>

                <h2>String Generator</h2>
                <p>Enter a String to Determine Palindrome, Vowel Count and Letter Shift.</p>
                <input type="text" name='userInput' id='userInput'>
                <button id="submit" class="buttons" type='submit'><a href="#">Show Results</a></button>
                <div id="reset" class="buttons"><a href="#">Reset</a></div>

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