<?php

function timer() {
  // Reads the text file content into $minutes

  $min_file = fopen("Clock/minutes.txt","r") or die("can't open file");

  $minutes = fread($min_file,filesize("Clock/minutes.txt"));
  
  fclose($min_file);

  $min_int = (int) $minutes; // converts string input to integer for usage in the for loop conditions

  echo "\nYour " . $min_int . " minute timer starts now!\n"; // shows amount of time the timer will run

  for ($i = 0; $i < $minutes; $i++) {
    sleep(60); // waits 1 minute before showing that the time decreased by 1 minute
    $min_int--;

    if ($min_int == 1) echo "You have " . $min_int . " minute left. \n"; // ensures the output says 1 minute left instead of 1 minutes left for grammatical correctness ;)

    else echo "You have " . $min_int . " minutes left. \n";
  }

  echo "Your time is up!"; // marks the end of the timer

  // Adds number of candies earned to the existing candy total and stores the new total in a different file
  
  $candy_file = fopen("Clock/candy.txt","r") or die("can't open file");
  
  $cand = fread($candy_file,filesize("Clock/candy.txt"));

  $cand_total = $cand + $minutes;

  $candy_write = fopen("Clock/candy.txt","w") or die("can't open file");
  
  fwrite($candy_write, $cand_total);
  
  fclose($candy_file);
  
  menu(); // Return to menu
}

function feed() {
  // Function that triggers the feeding Lily feature

  // 1 minute of homework = 1 candy for Lily

  $candy_file2 = fopen("Clock/candy.txt","r") or die("can't open file");
  
  $candies = fread($candy_file2,filesize("Clock/candy.txt"));
  
  fclose($candy_file2);

  $candy_int = (int) $candies; // converts string input to integer for subtraction

  // Lily startup message and candy input
    echo "\n   /---\
  | :() |
   \---/
   i need food.";

      $lily_hungry = (int) readline("\n\nLily is hungry! How many candies do you want to feed her? ");
  
  // different response for certain amount of candies fed to Lily
  
  if ($lily_hungry > $candy_int) {
    echo "You don't have enough candies! You only have " . $candy_int . " candies.";
  }

  elseif ($lily_hungry == 0) {
    echo "\n\n /---\
| :( |
 \---/
 you meanie";
  }

  elseif ($lily_hungry > 0 && $lily_hungry < 10) {
    echo "\n\n /---\
| :/ |
 \---/
 Lily is slightly displeased.";

    // Subtracts canfies fed tp Lily from the total

    $candy_file = fopen("Clock/candy.txt","r") or die("can't open file");

    $cand = fread($candy_file,filesize("Clock/candy.txt"));
    
    $cand_total2 = $cand - $lily_hungry;

    $candy_write = fopen("Clock/candy.txt","w") or die("can't open file");

    fwrite($candy_write, $cand_total2);

  }


  elseif ($lily_hungry >= 10 && $lily_hungry <= 20) {
    echo "\n\n /---\
| :) |
 \---/
 Lily is content.";

    $candy_file = fopen("Clock/candy.txt","r") or die("can't open file");

    $cand = fread($candy_file,filesize("Clock/candy.txt"));
    
    $cand_total2 = $cand - $lily_hungry;

    $candy_write = fopen("Clock/candy.txt","w") or die("can't open file");

    fwrite($candy_write, $cand_total2);

  }

  elseif ($lily_hungry > 20) {
    echo "\n\n /---\
| :D |
 \---/
HAPPY";

    $candy_file = fopen("Clock/candy.txt","r") or die("can't open file");

    $cand = fread($candy_file,filesize("Clock/candy.txt"));
    
    $cand_total2 = $cand - $lily_hungry;

    $candy_write = fopen("Clock/candy.txt","w") or die("can't open file");

    fwrite($candy_write, $cand_total2);

  }

  else {
    echo "\n\nInvalid number.";
  }
  
  menu();
}

function menu() {
  echo "\n\nWelcome to the timer!\n";
  echo "1. Start timer\n";
  echo "2. Feed Lily\n";
  echo "3. Exit\n";
  $choice = readline("Enter the number of your choice: ");

  if ($choice == 1) {
    timer();
  }

  if ($choice == 2) {
    feed();
  }

  if ($choice == 3) {
    echo "\n\nGoodbye!";
  }
}

menu();
?> 