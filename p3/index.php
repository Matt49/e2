<?php require 'index-controller.php'; ?>
<!doctype html>
<html lang='en'>

<head>
        <title>P3: Rock, Paper, Scissors</title>
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
                        <p>You threw <?php echo($outcome['player']);?><br>
                                The computer threw <?php echo($outcome['computer']);?>
                        </p>
                        <?php if ($outcome['outcome'] == 'tie') { ?>
                        <p><span class="announce">It's a tie! </span>Try again.</p>
                        <?php } elseif ($outcome['outcome'] == 'win') {?>
                        <p><span class="announce">You win this round!</span> Way to go.</p>
                        <?php } else {?>
                        <p class="announce">You lose this round.</p>
                        <?php } ?>
                        <?php } ?>
                </div>

                <div class="match">
                        <?php if ($showWinner) { ?>

                        <?php if ($matchWinner == 'you') { ?>
                        <p><span class="announce">You are the Match Winner.</span><br>
                                The force is strong in you.</p>
                        <p class="emphasis">Choose your next throw to play another match.</p>
                        <?php } else {?>
                        <p><span class="announce">You lose the match :(</span><br>
                                You still have much to learn young jedi.<br>
                                <span class="emphasis">Choose again to start another match.</span></p>
                        <?php } ?>
                        <?php } ?>
                </div>
        </main>
</body>

</html>