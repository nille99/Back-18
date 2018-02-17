
<?php
    define("PAGE_TITLE", "Övning"); 
    include 'header.php'
 ?>  


<h2>Hämta data via URLen</h2>
<p>
<a href="?tal=64">64</a><br>
<a href="?tal=141">141</a><br>
</p>
<h3>
<?php
        
if(isset($_GET['tal'])) {
    if(100<($_GET['tal'])){
        echo "Talet är större än 100";
    }
    else{
        echo "Talet är mindre än 100";
    }

}
else{
    echo "Talet saknas";
}

?>
</h3>
<?php include 'footer.php' ?>