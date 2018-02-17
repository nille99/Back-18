
<?php
define("PAGE_TITLE", "postformular");
include 'ncludefiler/header.php'
?>

<h1>Arbeta med POST</h1>
<h2>Hämta data via post</h2>


<?php
    echo "<h3>";
    $namn = $_POST['namn'];
    echo "Ditt namn är: $namn";
    echo "</h3>";


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

<?php include 'icludefiler/footer.php';?>