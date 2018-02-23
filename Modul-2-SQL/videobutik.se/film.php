<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/4.0.0-beta.3/sandstone/bootstrap.min.css">
    <title>Videobutik</title>
</head>
<body class="container">
    <h1>Videobutik filmer</h1>

<?php
// Databasuppkoppling
require_once 'connect.php';

// Skapa en SQL-sats
$query = "SELECT *
FROM  film 
ORDER BY u.utDatum";

// Kör SQL-satsen
$table = mysqli_query($connection, $query)
or die(mysqli_error($connection));

// Visa en HTML-tabell
?>

<table class="table">
<tr> <th>Kund</th> <th>Film</th> <th>Uthyrningsdatum</th><th>Lämna tillbaka</th>  </tr>
<?php while ($row = $table->fetch_assoc()): ?>
<tr>
    <td><?php echo $row['namn'] ?></td>
    <td><?php echo $row['Titel'] ?></td>
    <td><?php echo $row['utDatum'] ?></td>

    <td>
<form action='update.php' method='post'>
<input type='hidden' name='FilmID' value="<?php echo $row['filmID']; ?>">
<input type='hidden' name='kundnummer' value="<?php echo $row['kundnummer']; ?>">
<input type='hidden' name='UtDatum' value="<?php echo $row['utDatum']; ?>">
<input type='submit' value='Lämna tillbaka' class="btn btn-outline-danger">
</form>
</td>
</tr>
<?php
// echo "<pre>";
// print_r($row);
// echo "</pre>";

endwhile;?>

</table>


</body>
</html>