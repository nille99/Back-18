<?php
    define("PAGE_TITLE", "Exempel 9-get"); 
    include 'includefiler/header.php'
 ?>  
<?php

if(isset($_GET['fname']) && isset($_GET['lname'])) {
    // Skriv detta i URlen
// test.php?name=<script>alert('hacked')</script>
// Testa i olika webbläsare!
    $fnamn = htmlspecialchars($_GET['fname']);
    $lnamn = htmlspecialchars($_GET['lname']);
    echo "<h1>$fnamn $lnamn</h1>";
}
else{
    echo "<h1>Data saknas</h1>";
}




// Skriver ut allt som finns i GET_Arrayen
print "<hr><h3>";
print "<pre>";
print_r ($_GET);
print "</pre></h3>";
?>
<?php include 'includefiler/footer.php'; ?>