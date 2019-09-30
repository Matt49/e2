<?php require 'index-controller.php'; ?>
<!doctype html>
<html lang='en'>

<head>
    <title>P2: Rock, Paper, Scissors</title>
    <meta charset='utf-8'>
</head>

<body>

<h1>Rock, Paper, Scissors</h1>

<h2>Mechanics</h2>
<ul>
<li>Player one and Player two randomly “throw” either Rock, Paper or Scissors.</li>
<li>A tie is declared if both players throw the same move.</li>
<li>Otherwise: Rock beats Scissors, Scissors beats Paper, Paper beats Rock.</li>
</ul>

<h2>Results</h2>
<ul>
<li>Player one throws <?php echo $player1Move; ?>.</li>
<li>Player two throws <?php echo $player2Move; ?>.</li>
<li><?php echo $movesResult; ?></li>
</ul>

</body>

</html>