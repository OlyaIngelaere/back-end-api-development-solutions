<?php

	$articles = array(	
		'1' 	=> 	array( 
			'title' 	=> 	'145hp', 
			'date' 	=> 	'145hp', 
			'content' 	=> 	'145hp', 
            'image' 	=> 	'145hp', 
            'imageDescription' 	=> 	'145hp'
		), 
		'2' => 	array( 
			'title' 	=> 	'145hp', 
			'date' 	=> 	'145hp', 
			'content' 	=> 	'145hp', 
            'image' 	=> 	'145hp', 
            'imageDescription' 	=> 	'145hp'
		), 
		'3' => 	array( 
			'title' 	=> 	'145hp', 
			'date' 	=> 	'145hp', 
			'content' 	=> 	'145hp', 
            'image' 	=> 	'145hp', 
            'imageDescription' 	=> 	'145hp'
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