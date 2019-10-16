<?php

session_start();


//Create variables for to track player and computer points for multiple rounds
if (isset($_SESSION['playerPoints'])) {
	$playerPoints = $_SESSION['playerPoints'];
} else {
	$playerPoints = 0;
}

if (isset($_SESSION['compPoints'])) {
	$compPoints = $_SESSION['compPoints'];
} else {
	$compPoints = 0;
}


//Single Round Code

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

//Array to hold outcome and throws
$outcome = [
    'outcome' => $playerResult,
    'computer' => $compThrow,
    'player' => $playerThrow,
];

//Superglobal to store outcome array
$_SESSION['outcome'] = $outcome; 


//Multiple Rounds Code

//Create variable to declare match winner
$matchWinner = null;

//Increment value of variable for player or computer if they win
if ($playerResult == 'win') {
        $playerPoints = $playerPoints + 1; 
}

if ($playerResult == 'lose') {
        $compPoints = $compPoints + 1; 
}

//Once player or computer reaches 2, declare winner and clear all points
if ($playerPoints > 1) {
        $matchWinner = 'you';
        $_SESSION['playerPoints'] = 0;
        $_SESSION['compPoints'] = 0;
        $playerPoints = 0;
        $compPoints = 0;
    }

if ($compPoints > 1) {
        $matchWinner = 'computer';
        $_SESSION['playerPoints'] = 0;
        $_SESSION['compPoints'] = 0;
        $playerPoints = 0;
        $compPoints = 0;
    }

//Store player points and game winner variable in superglobal
$_SESSION['playerPoints'] = $playerPoints;
$_SESSION['compPoints'] = $compPoints;
$_SESSION['matchWinner'] = $matchWinner;


//Redirect to home page
header('Location: index.php');