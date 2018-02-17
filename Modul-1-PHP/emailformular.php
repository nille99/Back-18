<?php
// Visa varningar och felmeddelanden
    ini_set("display_errors", 1);
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Konaktformulär</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>


<h1>Konaktformulär</h1>
<h2>Ett formulär som postar till en annan sidan</h2>


<form action="mail.php" method="post">

    <p>Namn <br>
    <input type="text"  name="yourname" placeholder="Ange ditt namn" required/>
    </p>
    <p>E-post <br>
    <input type="email"  name="yourmail" placeholder="Ange ditt emailadress" required/>
    </p>
    <p>Meddelande <br>
    <textarea  name="yourmassage" required/></textarea>
    </p>
  <input type="submit" value="Skicka medelande" />
</form>

<hr>
<footer>

Copyright &copy; <?php echo date("Y"); ?> 
&bull;Niklas Säwensten

</footer>  

</body>
</html>