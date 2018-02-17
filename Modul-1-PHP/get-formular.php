
<?php
    define("PAGE_TITLE", "Get formulär"); 
    include 'includefiler/header.php'
 ?>  


<h2>Hämta data via ett fornulär och metoden GET</h2>

<?php
if (isset($_GET["fname"])) {
    echo "Hej " . $_GET['fname'];
}
?>

<form action="get-formular.php" method="GET">
    Förnamn: <br>
    <input type="text" name="fname" />
    <br>
    EfterNamn: <br>
    <input type="text" name="lname" />
    <br>
    <input type="submit" value="Visa" />
</form>


<?php
// Skriver ut allt som finns i GET_Arrayen
print "<hr><h3>";
print "<pre>";
print_r ($_GET);
print "</pre></h3>";
?>
<?php include 'includefiler/footer.php'; ?>