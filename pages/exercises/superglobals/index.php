<?php

	$articles = array(	
		'1' 	=> 	array( 
			'title' 	=> 	'Endangered parrots Lily and Margot escape London Zoo', 
			'date' 	=> 	'24 Oct 2024', 
			'content' 	=> 	'Two critically endangered parrots have escaped London Zoo.

Blue-throated macaws Lily and Margot were on a routine flight when they flew out of their enclosure on Monday.

The pair have taken detours and hidden high up in the trees in the past but have never completely disappeared until now.

London Zoo has asked for any sightings to be reported to them, adding the two blue and yellow-feathered birds were likely to stick together.', 
            'image' 	=> 	'img/lily_margot.webp', 
            'imageDescription' 	=> 	'Lily and Margot took flight on Monday and have not been seen since'
		), 
		'2' => 	array( 
			'title' 	=> 	'Parakeets spotted in orchard for first time', 
			'date' 	=> 	'21 Oct 2024', 
			'content' 	=> 	'Colourful parakeets have been spotted for what is thought to be the first time in a Cambridgeshire orchard.

The exotic birds have made a new home for themselves in Coton.

Anna Gazeley, whose family runs Coton Orchard, established in 1922, said it was "the first time we have seen [the birds] in Cambridge".

The green ring-necked parakeets, or Psittacula krameri, are not native to this country but are the UKs only naturalised parrot, and the most northerly breeding parrot in the world, according to the local Wildlife Trust.', 
            'image' 	=> 	'img/parakeet.webp', 
            'imageDescription' 	=> 	'Colourful parakeets have moved into an orchard near Cambridge'
		), 
		'3' => 	array( 
			'title' 	=> 	'Couple love showing people their 20 rescued parrots', 
			'date' 	=> 	'5 Oct 2024', 
			'content' 	=> 	'A Wiltshire couple has devoted decades to rescuing parrots and now share their home with more than 20 birds.

David and Gill Vickery, from Calne, Wiltshire, first took in two cockatiels 40 years ago and can regularly be seen exercising their birds around the town.

The couple, who support the charity Problem Parrots, said more of the birds have been abandoned since the Covid pandemic.

Mr Vickery said the problem was that once parrots have been reared by humans, they are unable to return to the wild.', 
            'image' 	=> 	'img/couple.webp', 
            'imageDescription' 	=> 	'People are giving up parrots they bought during the pandemic, according to a charity
'
		) 
	);

?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/global.css">
        <link rel="stylesheet" type="text/css" href="/css/directory.css">
        <link rel="stylesheet" type="text/css" href="/css/facade.css">
        <title>        
            <?php if (isset($_GET['id'])): ?>
                <?= $articles[$_GET['id']]["title"] ?>
            <?php else : ?>   
                Articles
            <?php endif; ?>
        </title>
</head>
<body>
    <style>
            .multiple {
                float: left;
                width: 288px;
                margin: 16px;
                padding: 16px;
                box-sizing: border-box;
                background-color: #EEEEEE;
            }

            .multiple:nth-child(3n+1) {
                margin-left: 0px;
            }

            .multiple:nth-child(3n) {
                margin-right: 0px;
            }

            .single img {
                float: right;
                margin-left: 16px;
            }

            .multiple h1 {
                margin: 0;
                font-size: 18px;
            }

            .read-more {
                text-align: right;
            }

            .read-more:after {
                padding-left: 6px;
                content: ">";
            }
    </style>
    <section>
        <?php if (isset($_GET['id'])): ?>
            <?php if (isset($articles[$_GET['id']])): ?>
                <article class="single">
                    <h1><?= $articles[$_GET['id']]["title"] ?></h1>
                    <p><?= $articles[$_GET['id']]["date"] ?></p>
                    <img src="<?= $articles[$_GET['id']]["image"] ?>" alt="<?= $articles[$_GET['id']]["imageDescription"] ?>">
                    <p><?= $articles[$_GET['id']]["content"] ?></p>
                </article>
            <?php else : ?>  
                <p>This article does not exist.</p>
            <?php endif; ?> 
        <?php else : ?>   
            <?php foreach ($articles as $key => $article): ?>
                <article class="multiple">
                    <h1><?= $article["title"] ?></h1>
                    <p><?= $article["date"] ?></p>
                    <img src="<?= $article["image"] ?>" alt="<?= $article["imageDescription"] ?>">
                    <p><?= substr($article["content"], 0, 50) ?>...</p>
                    <p class="read-more"><a href="index.php?id=<?= $key ?>">Read more</a></p>
                </article>
            <?php endforeach; ?> 
        <?php endif; ?>
    </section>
</body>
</html>