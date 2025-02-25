<?php

    $number = 4;
    if($number == 1){
        $day = "monday";
    }
    if($number == 2){
        $day = "tuesday";
    }
    if($number == 3){
        $day = "wednessday";
    }
    if($number == 4){
        $day = "thursday";
    }
    if($number == 5){
        $day = "friday";
    }
    if($number == 6){
        $day = "saturday";
    }
    if($number == 7){
        $day = "sunday";
    }

    $uppercase = strtoupper($day);
    $uppercaseWithoutA = str_replace("A", "", $uppercase);
    $uppercaseWithoutLastA = str_replace("A", "", $uppercase);
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
    <body>

        <h1>Conditional statements: if</h1> 

        <h2>Part 1</h2>

        <ul>
            <li>Create an HTML document with a PHP code block</li>
            <li>Create a PHP script that, based on a number (between 1 and 7), prints the corresponding day in lowercase letters (no capital letters!)</li>
            <li>For example, when <code>$number</code> is equal to 1, the string <code>monday</code> is displayed on the screen</li>
        </ul>

        <p><?= $day ?></p>

        <h2 class="extra">Part 2</h2>

        <ul>
            <li>Make a copy of part 1</li>
            <li>Convert the name of the day (e.g. <code>monday</code>) to uppercase letters (e.g. <code>MONDAY</code>) using a string function.</li>
            <li>Create a variable that contains the name of the day completely in uppercase, except for the 'a' and print this variable in the HTML</li>
            <li>Create a variable that contains the name of the day completely in uppercase, except for the last 'a'</li>
        </ul>

        <p><?= $uppercase ?></p>
        <p><?= $uppercaseWithoutA ?></p>
        <p><?= $uppercaseWithoutLastA ?></p>
    </body>
</html>