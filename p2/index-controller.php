<?php

//Throw options
$moves = ['rock', 'paper', 'scissors'];

//Player's randomly generated throws
$player1Move = $moves[rand(0,2)];
$player2Move = $moves[rand(0,2)];

//Comparison result variable
$movesResult = null;

//Conditional statements to compare throws accoring to game rules
if ($player1Move == $player2Move) {
    $movesResult = 'It\'s a tie!'; 
} elseif ($player1Move == 'rock' and $player2Move == 'paper') {
    $movesResult = 'Player two wins!';
} elseif ($player1Move == 'rock' and $player2Move == 'scissors') {
    $movesResult = 'Player one wins!';
} elseif ($player1Move == 'paper' and $player2Move == 'rock') {
    $movesResult = 'Player one wins!';
} elseif ($player1Move == 'paper' and $player2Move == 'scissors') {
    $movesResult = 'Player two wins!';
} elseif ($player1Move == 'scissors' and $player2Move == 'paper') {
    $movesResult = 'Player one wins!';
} else {
    $movesResult = "Player two wins!";
} 
