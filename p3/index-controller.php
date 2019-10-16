<?php

session_start();

//
if (isset($_SESSION['outcome'])) {
    $outcome = $_SESSION['outcome'];
    $showResult = true;
    $_SESSION['outcome'] = null;
     
}
else {
    $showResult = false;
}

//
if (isset($_SESSION['matchWinner'])) {
    $matchWinner = $_SESSION['matchWinner'];
    $showWinner = true;
    $_SESSION['matchWinner'] = null;
    
}
else {
    $showWinner = false;
}




