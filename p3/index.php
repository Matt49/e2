<?php require 'index-controller.php'; ?>
<!doctype html>
<html lang='en'>

<head>
    <title>P2: Rock, Paper, Scissors</title>
    <meta charset='utf-8'>
</head>

<body>

<h1>Rock, Paper, Scissors</h1>

<h2>Instructions</h2>
<ul>
<li></li>
<li></li>
<li></li>
</ul>

<form method='POST' action='process.php'>

<input type='radio' name='throw' value='rock' id='rock'>
<label for='rock'>Rock</label>

<input type='radio' name='throw' value='paper' id='paper'>
<label for='paper'>Paper</label>

<input type='radio' name='throw' value='scissors' id='scissors'>
<label for='scissors'>Scissors</label>

<button type='submit'>Throw...</button>

</form>

<?php if ($showResult) { ?>

    <?php if ($outcome['outcome'] == 'tie') { ?>
                It is a tie.
        <?php } elseif ($outcome['outcome'] == 'win') {?>
                You win!
        <?php } else {?>
                You lose :(
        <?php } ?>
     <br>
     <br>
    
    <?php var_dump($outcome); ?>  
    <?php var_dump($playerPoints); ?> 

<?php } ?>


</body>

</html>