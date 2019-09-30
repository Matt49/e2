<?php

$moves = ['rock', 'paper', 'scissors'];
//var_dump($moves);
$player1Move = $moves[rand(0,2)];
$player2Move = $moves[rand(0,2)];
//echo($player1Move);
//echo($player2Move);

$movesResult = null;

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

//echo($movesResult);