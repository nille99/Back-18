<?php
define("SITE_TITLE", "PHP - Date");
define("WEBMASTER", "Niklas Säwensten");
define("MOBIL", "070 123 45 76");?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo SITE_TITLE ?></title>
</head>
<body>
<h1><?php echo SITE_TITLE ?></h1>
<h1> Konstanter i PHP </h1> 
<h2><?=SITE_TITLE?></h2> 
<h2> Konatkt </h2 > 
<p> Webmaster: <?=WEBMASTER?></p >
<p> Mobil: <?=MOBIL?></p >  
<h2> Datum och Tid </h2 >  
 
 <?php
    //Fixa rätt tidszon
    date_default_timezone_set('europe/stockholm');
    setlocale(LC_TIME, 'sv_SE');
    echo date("Y") . "<br>";
    echo date("Y-m-d") . "<br>";
    echo date("Y m d") . "<br>";
    echo date("Y") . "<br>";
    echo date("M") . "<br>";
    echo date("D") . "<br>";
    echo date("H:i:s") . "<br>";
    echo date("Y-m-d H:i:s");
?> 
<br><br><br><br><br><br><br><br><br><br><br>
</body>  
</html>
 
 