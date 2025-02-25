<?php

  $year = 1996;
  if($year % 4 == 0 && $year % 100 != 0 && $year % 400 != 0){
    $isLeapYear = "a leap year";
  }
  else{
    $isLeapYear = "not a leap year";
  }

  $seconds = 221108521;
  $minutes = $seconds / 60;
  $hours = $minutes / 60;
  $days = $hours / 24;
  $weeks = $days / 7;
  $months = $days / 31;
  $years = $days / 365;
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

        <h1>Conditional statements: if else</h1>

        <h2>Part 1</h2>

        <ul>
            <li>Create a PHP script that can determine whether the variable 'year' is a leap year or not
                <ul>
                    <li>A year is a leap year if it is divisible by 4</li>
                    <li>A year divisible by 100 is not a leap year</li>
                    <li>A year divisible by 400 is a leap year</li>
                </ul>
            </li>
        </ul>

        <p><?= $year ?> is  <?= $isLeapYear ?></p>

        <h1 class="extra">Part 2</h1>

        <ul>
            <li>Create a PHP script that finds out how many full years, months, weeks, days, hours, minutes, and seconds there are in a given number of seconds (e.g., 221108521)</li>

            <li>
                Assume that a month has 31 days and a year has 365 days. The result should look something like this:

                <div class="facade-minimal" data-url="http://www.app.local/index.php">

                    <h1>Years, months, weeks, days, hours, minutes, and seconds</h1>

                    <p>in 221108521 seconds</p>

                    <ul>
                        <li>minutes: 3685142</li>
                        <li>hours: 61419</li>
                        <li>days: 2559</li>
                        <li>weeks: 365</li>
                        <li>months (31): 82</li>
                        <li>years (365): 7</li>
                    </ul>
                </div>

            </li>
        </ul>

        
        <p>in <?= $seconds ?> seconds</p>

        <ul>
            <li>minutes: <?= $minutes ?></li>
            <li>hours: <?= $hours ?></li>
            <li>days: <?= $days ?></li>
            <li>weeks: <?= $weeks ?></li>
            <li>months (31): <?= $months ?></li>
            <li>years (365): <?= $years ?></li>
        </ul>

    </body>
</html>