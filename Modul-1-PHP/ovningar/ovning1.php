
<?php
    define("PAGE_TITLE", "Övning 1"); 
    include 'header.php'
 ?>  


<?php
 
 function multi($x)
{
    return ($x * $x);
}

  echo "<table border='1'>";

  for($i=1 ; $i<100 ; $i++ ){
    echo "<tr><td> $i </td><td>", multi($i, $i), "</td></tr>";
}
echo "</table>";

?>

<?php include 'footer.php' ?>