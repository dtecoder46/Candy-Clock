# Candy Clock
A customizable timer, created through a PCKX (PHP, C++, Kotlin, XML | aka PACKX) stack that allows the client to stay focused on homework while satisfying a virtual pet.

## Installation
Replit:
1. Go to the Candy Clock cover page
2. Fork the Repl
3. Press "Run"

Github:
1. Fork the repository
2. Transfer to any IDE and run the code

## Usage
In order to set a specific number of minutes for the timer, put the number of minutes in _minutes.txt_. **Running the project will result in about a minute of loading (due to the stupidly-long compile time of Kotlin)** before printing a table that will show the number of candies you have earned over time.

A menu will appear with three options:
1. Start timer
2. Feed Lily
3. Exit

**You must type in the corresponding number**. Choosing "Exit" simply stops the program and stores your current candy count into _candy.xml_, a data file. If you choose "Start timer", the program delays for however many minutes you specified, alerting you of how much delay time is left. When the delay ends, the length of the timer is added to the number of previously-stored candies (1 minute on the timer = 1 candy earned), and you are returned to the menu.

If you choose "Feed Lily", you are greeted by an exceptionally hungry character who wants to eat the candies you have. You can choose the number of candies to feed her, and Lily's reaction differs based on how much you feed her (**tip: more candies = Lily is more happy, so work hard!**). The program will also stop you if the candy number specified is more than what you actually have, or if the number entered is invalid (e.g.: word input instead of numbers). You are then returned to the menu.

For a more in-depth look into the program, be sure to check the code comments.

![signature](sig.jpeg)
