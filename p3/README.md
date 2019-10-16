# Project 3
By: Matt Griffing
Production URL: <http://p3.mattgriffing.tech>

## Game planning

### First Round

**On index.php**

1. Use form with radio buttons to give player option of choosing rock, paper, or scissors.

2. Use POST method to extract the player's choice from the form. POST goes to file called process.php.

**On process.php**

3. Set player variable equal to the value of the choice from the form.

4. Set computer's choice to randomly generated pick from array of rock, paper, and scissors.

5. Use "If else" statements to compare the player's choice to the computers random choice, according to the rules of the game. Rock beats scissors. Paper beats rock. Scissors beats paper. Create outcome array to store outcome info. If player wins set player variable to "win". If he loses set it to "lose". If its a tie set it to "tie".

6. Create a "session" to store outcome. Use "header" redirect to index.php. Require index-controller.php

**On index-controller.php**

7. Check to see if "outcome" variable is set so that you can determine whether it will be displayed or not on index.php. If its set extract its value. Create conditional statement with isset function to check to see if the $_SESSION 'outcome variable is set. If set make $showResult variable true. If not make it false. 

**On index.php**

8. Use if statement to check to see if $showResult variable exists. If it exists a conditional statment to declare outcome.


### Multiple Rounds Match Winner

**On process.php**

1. Create variables for the player and for the computer to hold points for each round won. Create them inside an "if statement" checking to see if they have been set. *This is necessary so that they don't reset each time the form is submitted.* If set, make them equal to value stored in $_Session superglobal mentioned below. If not set, set them to zero. 

2. If the player wins set $playerPoints variable to itself plus one. Same for the computer. 

3. If player points is greater than one declare them a winner and clear the playerPoints variable. Same for the computer. Create them inside "if statements" checking for points being greater than one. 

4. Create $_Session superglobals to store values between page loads for player points, computer points, and the match winner.

**On index-controller.php**

5. Extract value from superglobals for match winner. Create Show winners variable. Clear game winner superglobal. Do this in conditional checking if the game winner superglobal is set. This way we only show the game winner information if there is a game winner. 

**On index-controller.php**

6. If variable for showing the winner is true then declare the match winner with message that makes it clear what to do next - along with the directions. Once a match is won the player starts another round to start another match.