<?php

    $firstName = "Olga";
    $lastName = "Ingelaere";
    $fullName = $firstName . ' ' . $lastName;
    $fullNameLength = strlen($fullName);

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
		  <h1>String concatenation</h1>

		  <ul>
            <li>Create two separate variables that contain your first name and last name</li>
            <li>Concatenate both variables en assign the concatenated value to a new variable called <code>$fullName</code></li>
            <li>Print the variable value in a valid HTML document</li>
            <li>Extra: print the character count of <code>$fullName</code> in a new paragraph</li>
		  </ul>
    
        <p><?= $fullName ?></p>
        <p><?= $firstName ?> <?= $lastName ?></p>
        <p>Character count: <?= $fullNameLength ?> characters</p>

    </body>
</html>
