<?php require 'index-controller.php'; ?>
<!doctype html>
<html lang='en'>

<head>
    <title>P2: Rock, Paper, Scissors</title>
    <meta charset='utf-8'>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <main class="container">
        <h1>Rock, Paper, Scissors</h1>
        <h2>Instructions</h2>
        <div class='instructions'>        
                <ul>
                <li>Concentrate on your opponent - in this case, the computer. Look into its eyes.</li>
                <li>Try to guess what it will pick and pick an object that will beat it.</li>
                <li>Rock beats scissors. Paper beats rock. Scissors beats paper.</li>
                </ul>
        </div>
        <p>And Rock, Paper, Scissors is always best of three rounds.</p>
        <p>May the force be with you.</p>

        <form method='POST' action='process.php'>

                <input type='radio' name='throw' value='rock' id='rock'>
                <label for='rock'>Rock</label>

                <input type='radio' name='throw' value='paper' id='paper'>
                <label for='paper'>Paper</label>

                <input type='radio' name='throw' value='scissors' id='scissors'>
                <label for='scissors'>Scissors</label> <br>

                <button type='submit'>Throw...</button>

        </form>

        <div class="round">
                <?php if ($showResult) { ?>

                        <?php if ($outcome['outcome'] == 'tie') { ?>
                                <p>It's a tie! Try again.</p>
                        <?php } elseif ($outcome['outcome'] == 'win') {?>
                                <p>You win this round! Way to go.</p>
                        <?php } else {?>
                                <p>You lose this round.<br>
                        <?php } ?>
                <?php } ?>
        </div>
        
        <div class="match">
                <?php if ($showWinner) { ?>

                        <?php if ($matchWinner == 'you') { ?>
                                <p>You are the Match Winner.<br>
                                The force is strong in you.</p>
                                <p>Choose your next throw to play another match.</p> 
                        <?php } else {?>
                                <p>You lose the match :( <br>
                                You still have much to learn young jedi.<br>
                                Try again to start another match.</p>
                        <?php } ?>
                <?php } ?>
        </div>
    </main>
</body>
</html>