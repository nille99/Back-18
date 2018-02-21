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
<h2>Ändra i Telefonlista</h2>
<?php

// Logga in i databasen
// OBS! Vi får tillbaka en $connection
require_once('connect.php');

// Skapa en SQL-sats
if(isset($_GET['telefon'])){ // Hämta data via URLen (med GET)
   // $telefon = $_GET['telefon'];
};


// Hämta en nyckel från select.php
$telefon = $_GET['telefon'];

// Skapa en SQL-sats
$query = "SELECT * FROM kontakt WHERE telefon='$telefon' ";
echo $query;


$table = mysqli_query($connection , $query)  or die(mysqli_error($connection)) ;
          while($row = $table->fetch_assoc()){
            echo $row['namn'];
            echo $row['telefon'];
          }
// Exekvera SQL-satsen
// mysqli_query($connection , $query) or die(mysqli_error($connection)) ;




?>
<form class="form-inline my-3" method="post" action="insert.php" >

<label for="name">Namn </label>
<input type="text" value="<?php echo $query['namn']; ?>" class="form-control mx-2" id="name" name="name">

<label for="telefon">Telefon </label>
<input type="text" value="<?php echo $query['telefon']; ?>" class="form-control mx-2" id="telefon" name="telefon">

<button type="submit" class="btn btn-outline-primary">Ändra</button>
</form>

Copyright &copy; <?php echo date("Y"); ?> 
&bull;Niklas Säwensten

</footer>  

</body>
</html>