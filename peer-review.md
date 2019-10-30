## P3 Peer Review

+ Matt Griffing: 
+ Antonie Kowal: 
+ URL to reviewee's Github repo: *<https://github.com/AntonieKowal/e2/tree/master/p3>*

*Answer the following questions in regards to the student's project you are reviewing. Include code snippets in your answers when relevant.*


### Are you able to produce any errors or unexpected results?

The game functioned as it should. I could not get it to misfire in anyway. It would be an enhancement though to echo a corrective phrase when people enter a number less than or greater than the acceptable range. Right now nothing happens. This does not effect functionality, but usability would be enhanced with a corrective phrase. 


### Referencing the course notes on [Form design flow](https://hesweb.dev/e2/notes#/php/form-flow), describe the form design flow used in this project.
This project uses Design Flow C with GET method. When a user submits the form, the data from the form and the browser is sent to the process file via the GET method. The data is acted upon by the logic of the code in the process file and the browser is redirected to the index file. The index file requires an index-controller file that uses logic to help display the new data on the index file.


### Are there any separation of concern issues (i.e. non-display specific logic in view files, display code in controller files)? 
I do think there could be less logic code in the index and index-controller file. Lines 88-93 in the index file are pretty efficient but in terms of separation of concerns the logic in them might best be in the index-controller file.
```
<?php if (isset($directionArray) && $directionArray != null) { 
            foreach($guesses as $key => $value) {?>
            <li><?php echo "The guess was $value, the correct number is $directionArray[$key]."; ?></li>
        <?php }} 
         if ($guess == $correctGuess && $guess != null) { ?>
            <li> You guessed the correct number in <?php echo $finalGuessAmount ?> rounds!</li>
            <li> A new number has been generated</li> 
            <li> Try to guess it in fewer rounds!</li>
        <?php } ?>
```
I'm not sure why the $target is being checked by isset and then declared in lines 32-34 of the index-controller file. I would think it better to do this in the process file. Is there a reason to do it here?


### Are there aspects of the code that you feel were not self-evident and would benefit from comments?
Commenting is sparse throughout the project. Neither the index or the index-controller files have comments separating code from the two different games displayed in the index file. Comments in the process file would clarify why and when processes occurr and would have made the code easier to review.


### List any/all built-in PHP methods used with a brief summary of what the method does
__isset__
The built-in PHP isset method is used extensively. This method checks to see if a variable is declared and different from null. It returns a boolean value of true if the variable exists and has any value other than null.

__session_start__
This function starts a new session or resumes an existing session which allows one to store a variable between page loads


### Are there any parts of the code that you found interesting or taught you something new?
Lines 28-48 in the process file are impressively effective. They collapse quite a bit of functionality into one "if, else" statement. I also like the use of the "for each" loop to say both the guess and whether the target number is higher or lower in lines 85-88 of the index file.


### Are there any parts of the code that you don't understand?
I'm confused by lines 32-34 in the index-controller file. 
```
if (!isset($_SESSION["target"])) {
    $target = rand(1, 20);
    $_SESSION["target"] = $target;
}
```
I'm not sure why this set of lines is here rather than the process file. How can the comparison code in the process file work for the first guess, if the target is determined after the browser is redirected to the index file?

In the process file its hard for me to follow when a global variable is used and when a regular variable is used. It's my understanding that for the most part you want to pass the global variables between pages, access them by setting them to a local variable, doing logic, and then passing the new values of variables back to the global variable. This approach would make it easier to know when you are working with the local variable and when you are working with a global variable.

I also don't get why it is necessary to add `&& $directionArray != null` below.

```
<?php if (isset($directionArray) && $directionArray != null) { 
            foreach($guesses as $key => $value) {?>
            <li><?php echo "The guess was $value, the correct number is $directionArray[$key]."; ?></li>
        <?php }}
```
Doesn't `isset` check to see if a variable is declared and is different from null. 


### Are there any best practices discussed in course material that you feel were not addressed in the code?
The planning out of strategy could have been more thorough. Once you realized the scope was an issue, you may have benefitted from returning to the best practice of planning out your steps. Clearer commenting may also have helped with that. This definitley would have also helped a rookie review it. 

### Do you have any additional comments not covered in the above questions?
In terms of presentation I found it somewhat confusing to have "Rock, Paper, Scissors" was thrown into a page with the "Number Guessing" game. There was no title or text explaining this. 

I appreciated reading your comments about being confused about the scope and "not quite knowing when and where a variable would be accessible." I also struggled with this aspect of the assignment. It was also helpful for me to read your question about needing to pass null to a bunch of variables in the index-controller file to get rid of errors.

While I could not answer your questions - or my own questions about your code, I hope some of my observations were helpful. It was definitley helpful to see someone elses thinking and style of coding. I think I tend to be more methodical in my style - which can be both good and bad.

