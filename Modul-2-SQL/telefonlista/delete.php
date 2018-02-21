<?php
$dbHost =
"localhost" ;
$dbUser =
"root" ;
$dbPwd =
"root" ;
$dbName = "telefonlista" ;
$connection = mysqli_connect($dbHost, $dbUser, $dbPwd, $dbName);
if (!$connection) {
echo "Error: Unable to connect to MySQL<br>";
echo "<br>Debugging error: " . mysqli_connect_error();
exit;
}
// Tips: Lägg till denna rad för att lösa problem med svenska tecken.
mysqli_set_charset($connection, "utf8");

if(isset($_GET['telefon'])){ // Hämta data via URLen (med GET)
    $telefon = $_GET['telefon'];
    // Skapa SQL-satsen
    $query =
    "DELETE FROM kontakt WHERE telefon = '$telefon'";
    // Exekvera SQL-satsen
    mysqli_query($connection, $query) or die(mysqli_error($connection));
    }
    // Gå till filen index.php
    header('Location: index.php');


?>