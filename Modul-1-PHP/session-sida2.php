
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
<h2>Hämta en sessionvariabel</h2>
<h3>
<?php
    // hämta en session till variabel
    $user = $_SESSION["user"];
    //Skriva ut variabel
    echo $user;

    // hämta en session till array med print_r
    $kart = $_SESSION["kart"];
    //Skriva ut array
    echo "<pre>";
    print_r ($kart);
    echo "</pre>";

    // Skriv ut en array som en HTML LIsta
    echo "<ul>";
    foreach($_SESSION["kart"] as $product){
        echo "<li>$product</li>";
    }
    echo "</ul>";
?>
</h3><br>
<h2>Ändra en sessionvariabel</h2>
<h3>
<?php
    // ändra en session till variabel
    $_SESSION["user"] = "kalle";
    echo $_SESSION["user"];
?>
</h3><br>
<?php
    // $_SESSION är en associative array som innehåller info om alla sessionsvariabler
    echo "<pre>";
        print_r ($_SESSION);
    echo "</pre>";

    // Ta bort en session (destroy)
    session_destroy(); 
    //Ta bort alla sessionsvariabler (unset
    session_unset(); 

?>
<?php include 'includefiler/footer.php'?>