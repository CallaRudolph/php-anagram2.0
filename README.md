  # Anagram Checker
  ##### _Exercise in Behavior-Driven Development with PHP Testing, 07.06.17_

  #### By Calla Rudolph (<callarudolph@gmail.com>) and Brittany Kerr (<kerrbrittany9@gmail.com>)

  ## Description

  This web application allows users to input a base word and three words they believe to be anagrams of that word. The program verifies if their input words are indeed anagrams of the base word and displays the result. This is a practice in using Behavior Driven Development the Silex micro framework and twig templates. It was tested step by step using PHPUnit.

  ## Setup

  * Open GitHub site on your browser: https://github.com/kerrbrittany9/anagram2.0
  * Select the dropdown (green box) "Clone or download"
  * Copy the link for the GitHub repository
  * Open Terminal on your computer
  * In Terminal, perform the following steps:
      * type 'cd desktop' and press enter
      * type 'git clone' then copy the repository link and press enter
      * type 'cd anagram2.0' to access the document root (project folder) on your computer
      * type 'composer install' to download dependencies (Silex & Twig)
      * type 'cd web' to access web folder, then type 'php -S localhost:8000' to open local server
  * Open browser and type 'localhost:8000' to view app.
  * Enter in a word and you will see the results!
  * Click the link on the results page to return home.

  ## Specifications
  1. The user will input three values that are two-letters long along with the original word and the program will compare those values to verify if they match the anagram that is in alphabetical order.
    * Input: 'ab', 'ba', 'cd', 'th'
    * Output: [ba => true, cd => false, th => false]
  2. The user will input three+ letter words and possible anagrams to that word. The program will return an anagram that matched the alphabetical anagram of inputted word.
    * Input: 'cat', 'act', 'tca', 'red'
    * Output: [act => true, tca => true, red => false]

  ## Technologies Used

  PHP, Silex, Twig, PHPUnit, CSS, HTML5

  ### License
  This software is licensed under the MIT license.

  Copyright &copy; 2017 **_Brittany Kerr and Calla Rudolph_**
