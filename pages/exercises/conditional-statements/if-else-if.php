<?php

  $number = 56;
  if($number < 10){
    $text = "The number lies between 1 and 10";
  }
  else if($number < 20) {
    $text = "The number lies between 10 and 20";
  }
  else if($number < 30) {
    $text = "The number lies between 20 and 30";
  }
  else if($number < 40) {
    $text = "The number lies between 30 and 40";
  }
  else if($number < 50) {
    $text = "The number lies between 40 and 50";
  }
  else if($number < 60) {
    $text = "The number lies between 50 and 60";
  }
  else if($number < 70) {
    $text = "The number lies between 60 and 70";
  }
  else if($number < 80) {
    $text = "The number lies between 70 and 80";
  }
  else if($number < 90) {
    $text = "The number lies between 80 and 90";
  }
  else if($number < 100) {
    $text = "The number lies between 90 and 100";
  }
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/global.css">
        <link rel="stylesheet" type="text/css" href="/css/directory.css">
        <link rel="stylesheet" type="text/css" href="/css/facade.css">
    </head>
    <body >

        <h1>Conditional statements: if else if</h1>
        
        <h2>Part 1</h2>

        <ul>
            <li>Create a number with a value between 1-100</li>
            <li>Make sure the script can say between which tens the number lies, for example 'The number lies between 20 and 30'.</li>
            <li>Then make sure the message is printed in reverse, for example '03 dna 02 neewteb seil rebmun ehT'.</li>
        </ul>

        <p><?= strrev($text) ?></p>
    </body>
</html>