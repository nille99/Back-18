
<?php
    define("PAGE_TITLE", "Övning 2"); 
    include 'header.php'
 ?>  

 <form action="ovning2.php" method="get">
    Tal 1: <br>
      <input type="number" name="tal1" required/>
    <br>
    <input type="submit" value="Summa" />
</form>

<?php
 
 function fac($i)
 {
     if ($i>1) return ($i*fac($i-1)); else return(1);
 }

 if(isset($_GET['tal1'])) {
    //Hämta talen från GET-Arrayen
    $tal1= htmlspecialchars($_GET['tal1']);


    //Anropa funktionen
    echo "<h2>$tal1 ! = ";


    //for($i=1 ; $i<$tal1 ; $i++ ){
        for ($i = $tal1; $i >= 1; $i--) {
            if($i==1){
                echo "$i ";
            }
            else{
                echo "$i * ";
            }
    }
    echo " = ", fac($tal1),"<br></h2>";

}

?>

<?php include 'footer.php' ?>