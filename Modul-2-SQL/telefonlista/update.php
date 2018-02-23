<?php

//Testa
 echo "<pre>";
    print_r($_POST);
 echo "</pre>";
// Databasuppkoppling
require_once 'connect.php';

// Hämta från post
$kundnummer = $_POST['kundnummer'];
$FilmID = $_POST['FilmID'];
$UtDatum = $_POST['UtDatum'];


$sql="UPDATE uthyrning SET inDatum = CURRENT_TIMESTAMP
WHERE kund = '$kundnummer'
AND Film = '$FilmID'
AND utDatum = '$UtDatum' ";

//Kör sql-satsen
mysqli_query($connection, $sql) or die(mysqli_error($connection));


// Gå till startsidan (index.php)
//header('Location: index.php');
?>