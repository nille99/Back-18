
<?php
define("PAGE_TITLE", "Funktioner");
include 'includefiler/header.php'
?>


<h2>Funktioner</h2>

<form action="funktioner.php" method="get">
    Tal 1: <br>
      <input type="number" name="tal1" required/>
    <br>
    Tal 2: <br>
    <input type="number" name="tal2" required />
    <br>
    <input type="submit" value="Summa" />
</form>

<?php
// skapa en funtion plus
function plus($x, $y)
{
    return ($x + $y);
}
// skapa en funtion minus
function minus($x, $y)
{
    return ($x - $y);
}

if(isset($_GET['tal1']) && isset($_GET['tal2'])) {
    //Hämta talen från GET-Arrayen
    $tal1= htmlspecialchars($_GET['tal1']);
    $tal2 = htmlspecialchars($_GET['tal2']);

    //Anropa funktionen
    echo "<h2>$tal1 + $tal2 = ";
    echo plus($tal1, $tal2),"<br>";
    echo "$tal1 - $tal2 = ";
    echo Minus($tal1, $tal2),"<br></h2>";
}

?>




<?php include 'includefiler/footer.php';?>