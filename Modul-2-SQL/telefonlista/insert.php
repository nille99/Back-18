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

$namn = $_POST['name'];
$telefon = $_POST['telefon'];
$sql="INSERT INTO kontakt VALUES ('$namn', '$telefon')";
mysqli_query($connection, $sql) or die(mysqli_error($connection));
// Gå till filen index.php
header('Location: index.php');


?>