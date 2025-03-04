<?php

  $animals1 = array('cat', 'dog', 'parrot', 'sheep', 'cow', 'goat', 'horse', 'elephant', 'frog', 'rabbit');
  $animals2[] = 'cat';
  $animals2[] = 'dog';
  $animals2[] = 'parrot';
  $animals2[] = 'sheep';
  $animals2[] = 'cow';
  $animals2[] = 'goat';
  $animals2[] = 'horse';
  $animals2[] = 'elephant';
  $animals2[] = 'frog';
  $animals2[] = 'rabbit';

  $vehicles = array(	
	'landVehicles' 	=> 	array( 'Vespa', 'bicycle' ), 
	'waterVehicles' => 	array( 'surfboard', 'raft', 'schooner', 'three-master' ), 
	'airVehicles' => 	array( 'hot air balloon', 'helicopter', 'B52' )  
  );

  $numbers = array(1, 2, 3, 4, 5);
  $multiply = $numbers[0] * $numbers[1] * $numbers[2] * $numbers[3] * $numbers[4];

  $numbers2 = array(5, 4, 3, 2, 1);
  $sum = array($numbers[0] + $numbers2[0], $numbers[1] + $numbers2[1], $numbers[2] + $numbers2[2], $numbers[3] + $numbers2[3], $numbers[4] + $numbers2[4]);
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

        <h1>Arrays: creation</h1>

            <ul>
                <li>Create an array in which you store 10 animals (do this in 2 different ways)</li>
                <li>Create a new array containing 5 vehicles, making sure you can determine which category of vehicle it is (2-dimensional array), such as 'land vehicles', 'water vehicles', 'air vehicles'.
                    <p>When you do a <code>var_dump</code> of this array, the result looks something like this:</p>

                    <ul class="array-notation pre">
                        <li>
                            [ 'landVehicles' ] =>
                            <ul>
                                <li>[ 0 ] => 'Vespa'</li>
                                <li>[ 1 ] => 'bicycle'</li>
                            </ul>
                        </li>
                        <li>
                            [ 'waterVehicles' ] =>
                            <ul>
                                <li>[ 0 ] => 'surfboard'</li>
                                <li>[ 1 ] => 'raft'</li>
                                <li>[ 2 ] => 'schooner'</li>
                                <li>[ 3 ] => 'three-master'</li>
                            </ul>
                        </li>
                        <li>
                            [ 'airVehicles' ] =>
                            <ul>
                                <li>[ 0 ] => 'hot air balloon'</li>
                                <li>[ 1 ] => 'helicopter'</li>
                                <li>[ 2 ] => 'B52'</li>
                            </ul>
                        </li>
                    </ul>

                </li>
            </ul>

            <p><?= print_r($animals1) ?></p>
            <p><?= print_r($animals2) ?></p>

            <p><?= print_r($vehicles) ?></p>

        <h1 class="extra">Exercise arrays: part 2</h1>

            <ul>
                <li>Create an array in which you place the numbers 1, 2, 3, 4, 5</li>
                <li>Multiply all the numbers together and print to the screen</li>
                <li>Print the odd numbers (by using an operator, do not do this manually)</li>
                <li>Create a second array in which you place the numbers 5, 4, 3, 2, 1</li>
                <li>Add the numbers from both arrays with the same index together</li>
            </ul>

            <p><?= $multiply ?></p>
            <p><?= print_r($sum) ?></p>
    </body>
</html>