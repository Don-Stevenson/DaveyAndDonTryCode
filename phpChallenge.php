<?php

// $num = rand($min, $max) <= implement this
// write a function that checks the guess to see if it matches the num.
// The guess has to be within the range between min an max
// use if else else if blocks to solve
// try it with the random num generator to see if it is really working

function testGuess($myGuess)
{
   $min = 1;
   $max = 50;
   $guess = 4; // change this value to test it
   $num = 16; // change this value to test it
   
   // prints the guess that has been entered
    echo $myGuess;
    
    // checks if the number is actually a number
    if (!is_numeric($myGuess)) {
        echo "<p>". $myGuess ." is not a number </p>";
        
        // check if myguess is within range 
    } else {
        if ($myGuess > $max || $myGuess < $min) {
            echo "<p>". $myGuess ." is not within the range specified </p>";
            
            //  is myguess the number? if not, print this message  
        } elseif ($myGuess != $num) {
            echo "<p>". $myGuess ." is not the correct guess </p>";
         
           // only when myguess is the number print the following  
         } else {
            echo "<p>". $myGuess ." is the correct guess!! Awesome work! </p>";
        }
    }
}


// testGuess("hello");
// expect "<p>". $myGuess ." is not a number </p>";

// testGuess(100);
//  expect "<p>". $myGuess ." is not with the range specified </p>";

// testGuess(-1);
//  expect "<p>". $myGuess ." is not with the range specified </p>";

// testGuess(5);
//  expect "<p>". $myGuess ." is not the correct guess </p>";

testGuess(16);
//  expect "<p>". $myGuess ." is the correct guess!! Awesome work! </p>";