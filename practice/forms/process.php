<?php
var_dump($_POST);
var_dump($_POST['answer']);

if($_POST['answer'] == '') {
    var_dump('You didn’t enter a guess');
}
else if($_POST['answer'] == 'pumpkin') {
    var_dump('Correct!');
}
else {
    var_dump('Incorrect');
}