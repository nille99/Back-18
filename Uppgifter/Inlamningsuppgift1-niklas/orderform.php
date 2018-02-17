

<?php
define("PAGE_TITLE", "webshop");
include 'header.php';

if(isset($_GET['vara']) ) {

    $vara = htmlspecialchars($_GET['vara']);
    $vara = str_replace("_"," ",$vara);
    $pris = htmlspecialchars($_GET['pris']);
    $bild = htmlspecialchars($_GET['bild']);
    echo "<h1>$vara</h1>";
    echo "<p>Pris: $pris</p>";
    echo "<img src='images/",$bild,"' class='rounded d-block mx-auto' alt='",$vara,"'>";
    include 'form.php';
}

else{
    echo "<h1>Vara saknas</h1>";

    echo "<a href='index.php' class='btn btn-primary'>gå tillbaka</a>";
}
?>


<?php


/*
echo "<hr><h2>Felsökning</h2>";
echo "<h3>";
print "<pre>POST ";
print_r($_POST);
print "</pre>";
echo "<hr>";
print "<pre>GET ";
print_r($_GET);
print "</pre>";
echo "</h3>";
*/
?>
<?php include 'footer.php';?>
