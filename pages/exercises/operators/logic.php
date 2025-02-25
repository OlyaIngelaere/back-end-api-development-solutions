<?php

    $textToCheck = "Soupik";
    $check1 = strlen($textToCheck) > 5 && substr($textToCheck, 0, 1) == strtoupper(substr($textToCheck, 0, 1));
    $check2 = strlen($textToCheck) > 5 || strrpos($textToCheck, "e");
    $check3 = strlen($textToCheck) > 5;
    $check3b = !(strlen($textToCheck) <= 5);

    $yearOfBirth = 1996;
    $monthOfBirt = 02;
    $apply = $yearOfBirth > 1994 || $yearOfBirth % 2 != 0 || $monthOfBirt <= 6;
    if ($apply == true ) 
	{
		$text = "You apply";
	}
    else{
        $text = "";
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
        <style>
            .applicable
            {
                background-color: green;
                color: white;
            }
        </style>

		<h1>Logic operators</h1>

        <h2>Part 1</h2>

		<ul>
            <li>Create a variable called <code>$textToCheck</code></li>
            <li>Assign any string you want to it</li>
            <li>Create a variable called <code>$check1</code> that evaluates whether <code>$textToCheck</code> has more than 5 characters and starts with a capital</li>
            <li>Create a variable called <code>$check2</code> that evaluates whether <code>$textToCheck</code> has more than 5 characters or contains the letter 'e'</li>
            <li>Create a variable called <code>$check3</code> that evaluates to <code>true</code> when <code>$textToCheck</code> has more than 5 characters</li>
            <li>Do the exact evaluation as above, in <code>$check3b</code>. Only now, write it differently.</li>
            <li>Show the results of all the check variables in a valid HTML document. Make sure you can see the value (true of false) written in letters in stead of showing numbers (0,1)</li>
		</ul>

        <p><?= $textToCheck ?> has more than 5 characters and starts with a capital: <?= var_dump($check1) ?></p>
        <p><?= $textToCheck ?> has more than 5 characters or contains the letter 'e': <?= var_dump($check2) ?></p>
        <p><?= $textToCheck ?> has more than 5 characters: <?= var_dump($check3) ?></p>
        <p><?= $textToCheck ?> has more than 5 characters (b): <?= var_dump($check3b) ?></p>

        <h2>Part 2</h2>

        <ul>
            <li>Create a valid HTML document</li>
            <li>Create a variable called <code>$yearOfBirth</code> that contains the year of your birth in <code>dddd</code> (ie. 1994) format</li>
            <li>Create a variable called <code>$monthOfBirt</code> that contains the year of your birth in <code>mm</code> (ie. 02) format</li>
            <li>Evaluate if your year of birth is odd or above 1994. If this is not the case and your month of birth is below or equal to the first six months, then it should still evaluate to true.</li>
            <li>If the above evaluation is true, then the text "You apply" is being shown in a <code>&lt;p&gt;</code> element and a class is being added called "applicable". This class makes the background-color of the paragraph green and the text white.</li>
        </ul>

        <code class="<?= ( ( $apply == true ) ? "applicable" : "" ) ?>"><?= $text ?></code>
    </body>
</html>
