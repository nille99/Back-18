
<?php
define("PAGE_TITLE", "Get formulär");
include 'includefiler/header.php'
?>


<h2>Skicka data till en annan sidan</h2>

<?php
if (isset($_GET["fname"])) {
    echo "Hej " . $_GET['fname'];
}
?>

<form action="get-formular-sida2.php" method="get">
    Förnamn: <br>
      <input type="text" name="fname" required/>
    <br>
    EfterNamn: <br>
    <input type="text" name="lname" required />
    <br>
    <input type="submit" value="Visa" />
</form>


<?php include 'includefiler/footer.php';?>