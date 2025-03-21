<?php
    function calculateSum($number1, $number2)
    {
       return $number1 + $number2;
    }

    function multiply($number1, $number2)
    {
        return $number1 * $number2;
    }

    function isEven($number)
    {
        return $number % 2 == 0;
    }

    function convertAndCountString($string)
    {
        return array(strlen($string), strtoupper($string));
    }

    $conversion = convertAndCountString("This is a string.");
    $length = $conversion[0];
    $uppercase = $conversion[1];

    function printArray($array)
    {
        $printText = "<ul>";
        foreach($array as $key => $value) 
        {
            if(is_array($value)){
                $printText .= "<li>" . printArray($value) . "</li>";
            }
            else{
                $printText .= "<li>pets[". $key . "] has value '" . $array[$key] . "'</li>";
            }
        }
        $printText .= "</ul>";

        return $printText;
    }

    function validateHtmlTag($html)
    {
        return str_starts_with($html, "<html>") && str_ends_with($html, "</html>"); 
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
        
        <h1>Functions: basic</h1>
        
        <h2>Part 1</h2>

        <ul>
            <li>Create a function <code>calculateSum</code> that has 2 parameters, <code>$number1</code> and <code>$number2</code>
                <ul>
                    <li>Make sure that in this function the sum of the two numbers is calculated.</li>
                    <li>This function returns the result</li>
                    <li>
                        <p class="remark">Make sure that the function only returns a value. Printing should be done outside the function.
                        Combining multiple functionalities in one function reduces the reusability of the function. From now on, try to avoid having a function do multiple things (such as calculating and printing), even if this seems like more work at first.</p>
                    </li>
                </ul>
            </li>

            <li>Create a function <code>multiply</code> that has 2 parameters, <code>$number1</code> and <code>$number2</code>
                <ul>
                    <li>Make sure that in this function the product is calculated.</li>
                    <li>This function returns the result</li>
                </ul>
            </li>

            <li>Create a function <code>isEven</code> with 1 parameter <code>$number</code>
                <ul>
                    <li>Make sure that in this function a boolean is returned that, depending on the given number, is <code>true</code> or <code>false</code>.</li>
                </ul>
            </li>

            <li>Execute all these functions and make sure that the results appear on the screen</li>

            <li class="extension">Create a function that returns the length AND the uppercase version of a string. Then print the length and the uppercase version of the string outside the function. <span class="tip">return an array.</span></li>
        </ul>

        <p>2 + 3 = <?= calculateSum(2, 3) ?></p>
        <p>2 * 3 = <?= multiply(2, 3) ?></p>
        <p>Is 5 even? <?= var_dump(isEven(5)) ?></p>
        <p>The length of "This is a string." is <?= $length ?> and in uppercase this becomes <?= $uppercase ?></p>

        <h1 class="extra">Part 2</h1>

        <ul>
            <li>Create a function <code>printArray</code> that has 1 parameter, <code>$array</code></li>

            <li>This <code>$array</code> contains some values that you can choose yourself</li>

            <li>Make sure you eventually get to this result:

                <ul>
                    <li>
                        <div class="facade-minimal" data-url="http://www.app.local/index.php">

                            <h1>Exercise functions</h1>

                            <p>heroes[ 0 ] has value 'Roger Penrose'</p>

                        </div>

                    </li>

                    <li>Printing the name of the array is not that important (may be hardcoded or via another inventive way)</li>

                    <li class="extension">Make sure you can also print multidimensional arrays in the same way</li>
                </ul>
            </li>

            <li>Create a function <code>validateHtmlTag</code> that has 1 parameter, <code>$html</code>
                <ul>
                    <li>Make sure that this function can validate whether a correct &lt;html&gt;&lt;/html&gt; tag is present in the given string <code>$html</code></li>
                </ul>
            </li>

            <li>Execute all these functions and make sure that the results appear on the screen</li>
        </ul>

        <?= printArray(array("Soupik", "Monki", "Vishnu")) ?>  
        <p> Is " &lt;html&gtThis is html.&lt;/html&gt;" a valid html? <?= var_dump(validateHtmlTag("<html>This is html.</html>")) ?></p> 
    </body>
</html>