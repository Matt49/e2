# Project 2
By: Matt Griffing
Production URL: <http://p2.mattgriffing.tech>

## Game planning
1. Player 1 and Player 2 randomly “throw” either Rock, Paper or Scissors.
    - Create three item array with the different throw options
    - Create variables for each player and set them to a randomly picked throw option from the throw array
        - Use 'rand' function to generate a number between 0 and 2 and use this number to index a value from the throw array.
        - Make each player variable equal to the resulting value. That is the chosen throw option for that player.  
2. Player 1 and Player 2 compare their throws to see who wins. Rock beats scissors; Paper beats rock; and scissors beats paper. If the same symbols are thrown it is a tie
    - Create a variable to hold the result of the comparison. Set it to null. 
    - Use 'elseif' conditional statements with the logical operator 'and' to compare the throws and give the comparison outcomes to the variable
    - Echo that result variable on the display page
