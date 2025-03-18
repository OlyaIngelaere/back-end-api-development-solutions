<?php
    function showList($directory)
    {
        $printText = "<ul>";
        foreach(glob($directory . "/*/*.php") as $file) 
        {
            $printText .= "<li>" . $file . "'</li>";
        }
        $printText .= "</ul>";

        return $printText;
    }

    function searchFiles($searchTerm)
    {
        $printText = "<h1>Search Result for " . $searchTerm . "</h1>";
        if(count(glob("../../*/*/*" . $searchTerm . "*.php")) > 0){
            $printText .= "<ul>";
            foreach(glob("../../*/*/*" . $searchTerm . "*.php") as $file) 
            {
                $printText .= "<li>" . $file . "'</li>";
            }
            $printText .= "</ul>";
        }
        else{
            $printText .= "<p>Sorry, no search results found for " . $searchTerm . "'</p>";
        }

        return $printText;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/global.css">
        <link rel="stylesheet" type="text/css" href="/css/directory.css">
        <link rel="stylesheet" type="text/css" href="/css/facade.css">
</head>
<body>
    <style>
        form label {
            display: inline;
        }

        iframe {
            display: block;
            height: 750px;
            width: 1000px;
            border: 1px solid lightgrey;
            background: url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 100% 100%"><text fill="%23454545" x="50%" y="50%" font-family="sans-serif" font-size="16" text-anchor="middle">course pdf content here</text></svg>') 0px 0px no-repeat;
        }
    </style>

    <h1>Index Page</h1>
    <ul>
        <li><a href="exercise-repetition-assignment-01.php?link=course">Course</a></li>
        <li><a href="exercise-repetition-assignment-01.php?link=examples">Examples</a></li>
        <li><a href="exercise-repetition-assignment-01.php?link=assignments">Assignments</a></li>
    </ul>
    <form action="index.php" method="GET">
        <label id="search-query">Search for:</label>
        <input type="text" name="search-query" id="search-query" placeholder="Enter a search term">
        <input type="submit">
    </form>
    <?php if (isset($_GET['search-query'])) :?>
        <?= searchFiles($_GET['search-query']) ?> 
    <?php else : ?>  
        <h2>Content</h2> 
        <?php if (isset($_GET['link'])) :?>
            <?php switch ($_GET['link']) :
                case "course" : ?>
                    <iframe src="https://docs.google.com/presentation/d/1dJdMD4FbkfrTOHhvXMcMSfhseXgy9MS2jRTXgiMzLNA/edit?usp=sharing"></iframe>
                <?php break; ?>
                <?php case "examples" : ?>
                <?= showList("../../examples") ?>  
                <?php break; ?>
                <?php case "assignments" : ?>
                <?= showList("../../exercises") ?>  
                <?php break; ?>
            <?php endswitch; ?>
        <?php endif; ?>  
    <?php endif; ?>   
</body>
</html>