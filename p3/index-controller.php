<?php

session_start();

if (isset($_SESSION['outcome'])) {
    $outcome = $_SESSION['outcome'];
    $showResult = true;
    $_SESSION['outcome'] = null;
    $playerPoints = $_SESSION['playerPoints'];
}
else {
    $showResult = false;
}