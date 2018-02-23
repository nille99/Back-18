<?php

//Testa
echo "<pre>";
print_r($_POST);
echo "</pre>";
// Databasuppkoppling
require_once 'connect.php';

// Hämta från post
$name    = $_POST['name'];
$telefon = $_POST['telefon'];


$sql="UPDATE kontakt 
SET name = $name 
WHERE telefon = '$telefon' ";
mysqli_query($connection, $sql) or die(mysqli_error($connection));



// Gå till startsidan (index.php)
header('Location: index.php');

?>