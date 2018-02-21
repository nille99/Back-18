<?php
// Visa varningar och felmeddelanden
    ini_set("display_errors", 1);
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>sql Konaktformulär</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>


<h1>SQL Konaktformulär</h1>
<h2>Telefonlista</h2>
<?php
// Logga in i databasen
// OBS! Vi får tillbaka en $connection
require_once('connect.php');

// Skapa en SQL-sats
$query = "SELECT * FROM kontakt"; 
// Exekvera SQL-satsen
$table = mysqli_query($connection , $query) 
          or die(mysqli_error($connection)) ;


// Tips: Lägg till denna rad för att lösa problem med svenska tecken.
 //mysqli_set_charset($table, "utf8");
?>
<form class="form-inline my-3" method="post" action="insert.php" >

<label for="name">Namn </label>
<input type="text" class="form-control mx-2" id="name" name="name">

<label for="telefon">Telefon </label>
<input type="text" class="form-control mx-2" id="telefon" name="telefon">

<button type="submit" class="btn btn-outline-primary">Lägg till</button>
</form>


<?php

echo "<table border='1'><tr>";
echo "<th>Namn</th><th>Telefon</th><th>Ta bort</th><th>Ändra</th></tr>";
while($row = $table->fetch_assoc()){
    echo "<tr>
    <td>" . $row['namn'] . "</td>
    <td>" . $row['telefon'] . "</td>
    <td>
    <a href='delete.php?telefon=" . $row['telefon'] . "'
    class='btn btn-outline-danger'>Ta bort</a>
    </td>
    <td>
    <a href='edit.php?telefon=" . $row['telefon'] . "'
    class='btn btn-outline-danger'>Ändrat</a>
    </td>
    </tr>";
}
echo "</table>";

?>
Copyright &copy; <?php echo date("Y"); ?> 
&bull;Niklas Säwensten

</footer>  

</body>
</html>