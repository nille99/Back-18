<h1>Skicka e-post via PHP</h1>
<p>OBS! Vi Behöver en mail server</p>

<?php
ini_set("display_errors", 1);


mail("Nisaw99@hotmail.se" , "Hej från formulär" ,
"Ett meddelande via PHP-Mail",
"From: info@nackademin.se");

?>