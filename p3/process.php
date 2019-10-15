<?php

session_start();



if (empty($playerPoints)) {
    $playerPoints = 1;
} else {
    $_SESSION['playerPoints'] = $_POST['playerPoints'];
    $playerPoints = $_SESSION['playerPoints'];
}



//Throw options
$throws = ['rock', 'paper', 'scissors'];

//Player's Choice
$playerThrow = $_POST['throw'];


$compThrow = $throws[rand(0,2)];

//Comparison result variable
$playerResult = null;



//Conditional statements to compare throws accoring to game rules
if ($playerThrow == $compThrow) {
    $playerResult = 'tie'; 
} elseif ($playerThrow == 'rock' and $compThrow == 'paper') {
    $playerResult = 'lose';
} elseif ($playerThrow == 'rock' and $compThrow == 'scissors') {
    $playerResult = 'win';
} elseif ($playerThrow == 'paper' and $compThrow == 'rock') {
    $playerResult = 'win';
} elseif ($playerThrow == 'paper' and $compThrow == 'scissors') {
    $playerResult = 'lose';
} elseif ($playerThrow == 'scissors' and $compThrow == 'paper') {
    $playerResult = 'win';
} else {
    $playerResult = 'lose';
} 


$outcome = [
    'outcome' => $playerResult,
    'computer' => $compThrow,
    'player' => $playerThrow,
   //'points' => $playerPoints,
   // 'compPoints' => $compPoints,
];

$_SESSION['outcome'] = $outcome; 

 



// $playerPoints = null;
// $compPoints = null;

if ($playerResult == 'win') {
    $playerPoints = $playerPoints + 1; 
}

// if ($playerResult == 'lose') {
//     $compPoints = $compPoints + 1; 
// }

$_SESSION['playerPoints'] = $playerPoints;
//$_SESSION['compPoints'] = $compPoints;




header('Location: index.php');

