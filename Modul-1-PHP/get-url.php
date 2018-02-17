
<?php
    define("PAGE_TITLE", "Get - url"); 
    include 'includefiler/header.php'
 ?>  


<h2>Hämta data via URLen</h2>
<p>
<a href="?name=Niklas&age=40">Visa Niklas</a><br>
<a href="?name=Kalle&age=24">Visa Kalle</a>
</p>
<h3>
<?php

// Ange ett förvalt värde med ?? (Null coalescing operator)

//$name = $_GET['name'] ?? "" ;
//echo "Välkommen $name  <br>";

   // echo $_GET['namn'] ?? "" , " är ",  $_GET['age'] ?? "" , "år gammal. <br>"  ;

echo $_GET['name'] ?? ""  ;
        
if(isset($_GET['age'])) {
    echo " är ".$_GET['age'], "år gammal. <br>" ;
}

// Skriver ut allt som finns u GET_Arrayen
echo "<pre>";
print_r ($_GET);
echo "</pre>";

?>
</h3>
<?php include 'includefiler/footer.php' ?>