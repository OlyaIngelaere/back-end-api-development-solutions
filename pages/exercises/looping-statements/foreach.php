<?php

    $text = file_get_contents("text-file.txt");
    $textChars = str_split($text, 1);
    rsort($textChars);
    $textChars = array_reverse($textChars);
    $count = array();
	foreach($textChars as $charachter) 
	{
        if(isset($count[$charachter])){
            $count[$charachter] += 1;
        }
        else{
            $count[$charachter] = 1;
        }
	}

    $list1 = "<ul>";
    foreach($count as $countKey => $countValue) 
	{
        $list1 .= "<li>" . $countKey . " x " . $countValue . "</li>";
	}
    $list1 .= "</ul>";

    $tekst = file_get_contents("text-file.txt");
    $array = str_split($tekst, 1);
    $countAlphabet = array();
    foreach($array as $charachter) 
	{
        $charachter = strtolower($charachter);
        if (ctype_alpha($charachter)) {
            $charachter = strtoupper($charachter);
            if(isset($countAlphabet[$charachter])){
                $countAlphabet[$charachter] += 1;
            }
            else{
                $countAlphabet[$charachter] = 1;
            }
        } 
	}

    $list2 = "<ul>";
    foreach($countAlphabet as $countKey => $countValue) 
	{
        $list2 .= "<li>" . $countKey . " x " . $countValue . "</li>";
	}
    $list2 .= "</ul>";

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
        
        <h1>Looping statements: foreach</h1>
        
        <h2>Part 1</h2>

        <ul>
            <li>Create an HTML document with a PHP code block</li>

            <li>
                Read the text (text-file.txt) and store the text in a variable <code>$text</code>
                <span class="tip">Maybe the function <code>file_get_contents</code> will help</span>
            </li>

            <li>Split the text per character and store it in an array <code>$textChars</code> (so an array consisting of values of maximum 1 character)</li>

            <li>Make sure this array is sorted from Z to A</li>

            <li>Now reverse the order of the array completely</li>

            <li>Now make sure that you loop through all the characters of the text via a for loop and keep track of how many times each character occurs. Show a list with:
                <ul>
                    <li>How many different characters occur in total</li>
                    <li>How many times each character occurs.</li>
                </ul>
            </li>
        </ul>
        <p>Different charachters: <?= count($count) ?></p>
        <?= $list1 ?> 

        <h1 class="extra">Part 2</h1>

        <ul>
            <li>Create an HTML document with a PHP code block</li>

            <li>Create a variable <code>$tekst</code> with value (full content of text-file.txt)</li>

            <li>Analyse how often each letter of the alphabet occurs in the text (only the letters from the alphabet, no distinction between uppercase and lowercase letters)</li>

            <li>Show the results on the screen, e.g.

                <div class="facade-minimal" data-url="http://www.app.local/index.php">

                    <ul>
                        <li>E x 265</li>
                        <li>A x 245</li>
                        <li>...</li>
                    </ul>

                </div>

                <p class="tip">Do some research before you start this assignment.</p>
            </li>
        </ul>

        <?= $list2 ?> 
    </body>
</html>