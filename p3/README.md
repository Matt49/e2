# Project 3
By: Matt Griffing
Production URL: <http://p3.mattgriffing.tech>

## Game planning

On index.php

1. Use form with radio buttons to give player option of choosing rock, paper, or scissors.

2. Use GET method to extract the player's choice from the form. GET goes to process.php.

On process.php

3. Set player variable equal to the value of the choice from the form.

4. Set computer's choice to randomly generated pick from array of rock, paper, and scissors.

5. Use "If else" statements to compare the player's choice to the computers random choice, according to the rules of the game. Rock beats scissors. Paper beats rock. Scissors beats paper. Create results variable. If player beats the computer set it to true. If player loses to the computer set it to false. Ties will be handled in index-controller.php.

6. Create a "session" to store results. Use "header" redirect to index.php. 

On index-controller.php

7. Extract the results from the "session" and set it to results variable again.

8. If results are present, use if statements to declare the winner. If results true, player wins. If results false, player loses. Else, it's a tie.  