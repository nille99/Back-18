
<?php
define("PAGE_TITLE", "postformular");
include 'includefiler/header.php'
?>

<h1>Arbeta med POST</h1>
<h2>Ett formulär som postar till en annan sidan</h2>


<form action="postformular-sida2.php" method="post">
  <div class="form-group">
    <label >Vad heter du? </label>
    <input type="text"  class="form-control" name="namn" required/>
  </div>
  <button type="submit" class="btn btn-primary">Skicka</button>
</form>


<?php include 'includefiler/footer.php';?>