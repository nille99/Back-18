
<?php
define("PAGE_TITLE", "webshop");
include 'header.php';
?>

<h1>webshop</h1>
<h2>Varor</h2>


<?php
//Array varor innehåller alla produkter. 
//(Namn på varan som skickas med url, bild adress, pris, namn på varan)
$Varor = array
  (
  array("Ford_Model_A","fordmodela.jpg","4000kr","Ford Model A"),
  array("Ford_Model_C","fordmodelc.png","6000kr","Ford Model C"),
  array("Ford_Crown_Victoria","fordcrownvictoria.png","700000kr","Ford Crown Victoria"),

  );

?>
 <div class="row">


<?php
//Printar ut innehållet för vare vara
for($i=0 ; $i<count($Varor) ; $i++ ){
    echo "<div class='col-md-4'>";
    echo "<h3>",$Varor[$i][3],"</h3>";

    echo "<img src='images/",$Varor[$i][1],"' class='rounded d-block mx-auto' alt='",$Varor[$i][0],"'>";
    echo "<P>Pris: ",$Varor[$i][2],"</P>"; 
    echo "<a href='orderform.php?vara=",$Varor[$i][0],"&bild=",$Varor[$i][1],"&pris=",$Varor[$i][2],"' class='btn btn-primary'>Köp nu</a>";
    echo "</div>";
}
?>
</div>

<?php include 'footer.php';?>
