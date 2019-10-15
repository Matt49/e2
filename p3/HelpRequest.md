Hi All,

I've hit a road block with my p3 and am spinning my wheels...

I appreciate any hints that might help me get unstuck.

I'm building *Rock, Paper, and Scisors*. I have one round of it working but would like to make it so that the player or the computer must win two out of three rounds in order to win.

I'm not sure how to store the player scores from round to round. They get erased when the variable is declared again. 


**My Plan**

1) Create a variable for both player points and one for computer points.
2) Add to each of the variables when that player wins.
4) Use "if statements" saying if one of the player's sum equals the numbr 2, send a message saying that player won the game and also clear both "player point" variables.

An Idea I'v tried and failed at is using a session to somehow store the previous round score.

I'm also wondering if there is a way to use a conditional with isset in which I could put the "player point" variable declaration. That way it is not reset.


**Process.php**

```
<?php

session_start();


//Throw options
$throws = ['rock', 'paper', 'scissors'];

//Player's Choice
$playerThrow = $_GET['throw'];


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

$playerPoints = null;
$compPoints = null;

if ($playerResult == 'win') {
    $playerPoints = $playerPoints + 1; 
}

if ($playerResult == 'lose') {
    $compPoints = $playerPoints + 1; 
}

$outcome = [
    'outcome' => $playerResult,
    'computer' => $compThrow,
    'player' => $playerThrow,
    'points' => $playerPoints,
    'compPoints' => $compPoints,
];

$_SESSION['outcome'] = $outcome;   


header('Location: index.php');

```

