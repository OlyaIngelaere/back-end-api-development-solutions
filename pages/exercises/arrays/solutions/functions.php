<?php

   	// Part 1
	$animals =  array(
		'cat ', 
		'dog', 
		'sheep', 
		'snake',
		'frog'
	);

	$animalCount = count($animals);

   	var_dump($animalCount);

   	// Part 2
	$animals2 =  array(
		'cat ', 
		'dog', 
		'sheep', 
		'snake',
		'frog'
	);

	$alphabeticalAnimals = natcasesort($animals2);

   	$mamals = array(
   		'dolphin', 
   		'sheep', 
   		'tapir'
   	);

   	$mergedAnimals = array_merge($animals2, $mamals);

   	var_dump($mergedAnimals);

   	// Part 3
   	$values = array(8, 7, 8, 7, 3, 2, 1, 2, 4);

   	$duplicatesRemoved = array_unique($values);

   	var_dump($duplicatesRemoved);

   	rsort($duplicatesRemoved);

   	var_dump($duplicatesRemoved);
?>
