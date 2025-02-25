<?php

    $number = 4;
    switch ($number)
    {
        case 1:
            $day = "monday";
            break;
        case 2:
            $day = "tuesday";
            break;
        case 3:
            $day = "wednessday";
            break;  
        case 4:
            $day = "thursday";
            break;
        case 5:
            $day = "friday";
            break;
        case 6:
            $day = "saturday";
            break;  
        case 7:
            $day = "sunday";
            break;           
        default:
            $day = "";
    }

    $month = "january";
    switch (strtoupper($month))
    {
        case "JANUARY":
            $season = "winter";
            break;
        case "FEBRUARY":
            $season = "winter";
            break;
        case "MARCH":
            $season = "spring";
            break;
        case "APRIL":
            $season = "spring";
            break;  
        case "MAY":
            $season = "spring";
            break;   
        case "JUNE":
            $season = "summer";
            break;    
        case "JULY":
            $season = "summer";
            break; 
        case "AUGUST":
            $season = "summer";
            break;  
        case "SEPTEMBER":
            $season = "autumn";
            break; 
        case "OCTOBER":
            $season = "autumn";
            break;   
        case "NOVEMBER":
            $season = "autumn";
            break;  
        case "DECEMBER":
            $season = "winter";
            break;            
        default:
            $season = "This is not a month that I recognize";
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
    <body>

        <h1>Conditional statements: switch</h1> 

        <h2>Part 1</h2>

        <ul>
            <li>Create an HTML document with a PHP code block</li>
            <li>Create a PHP script that, based on a number (between 1 and 7), prints the corresponding day in lowercase letters (no capital letters!)</li>
            <li>Use a switch</li>
        </ul>

        <p><?= $day ?></p>

        <h2 class="extra">Part 2</h2>

        <ul>
            <li>Create an HTML document with a PHP code block</li>
            <li>Create a PHP script that evaluates a variable <code>month</code> and prints out which season that month is part of.</li>
            <li>Use a switch</li>
            <li>The default should mention something like: "This is not a month that I recognize"</li>
            <li>Suppose the <code>month</code> value comes from user input. Sometimes the user writes the month with a capital, sometimes without. Can you come up with a solution so that both the capitalized version of the month and the non capitalized version can be evaluated?</li>
        </ul>

        <p><?= $season ?></p>
    </body>
</html>