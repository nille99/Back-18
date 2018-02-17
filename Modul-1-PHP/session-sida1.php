
<?php
define("PAGE_TITLE", "SESSION");
include 'includefiler/header.php'
?>

<h1>Arbeta med sessioner</h1>
<h2>Starta med sessioner</h2>
<?php
    // Anropa session frunktionen
    session_start();
?>
<h2>Att sätta sessionvariabel</h2>
<?php
    // Sätta en sessionsvariabel
    $_SESSION["user"] = "Niklas";
    $_SESSION["order"] = "1234";
    $_SESSION["email"] = "Niklas@ab.se";

    // En sessionsvariabel kan vara en array
    $_SESSION["kart"] = ["P01", "P05"];

?>

<a href="session-sida2.php">Gå till nästa sida</a>

<?php include 'includefiler/footer.php'?>