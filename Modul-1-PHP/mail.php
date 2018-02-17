<h1>Skicka e-post via PHP</h1>
<p>OBS! Vi Behöver en mail server</p>

<?php
ini_set("display_errors", 1);


// Hämta data från formuläret via metoder post
$name = htmlspecialchars($_post['yourname']);
$mail = htmlspecialchars($_post['yourmail']);
$massage = htmlspecialchars($_post['yourmassage']);

$massage = "Ett meddelande från $name." .$massage;
// Argument som behövs i funktionen mail

$to = "nisaw99@hotmail.se";
$subject ="Hej från formuläret";
$headers = "From: $mail";

mail($to , $subject , $massage ,$headers);


echo "<h2>Ditt meddelande har skickas</h2>";
echo "<h2>Vi återkommer efter lunch</h2>";

print "<hr><pre>My Post";
print_r ($_POST);
print "</pre>";

?>