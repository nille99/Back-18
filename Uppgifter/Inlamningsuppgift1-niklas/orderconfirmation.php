
<?php
define("PAGE_TITLE", "webshop");
include 'header.php';


// Hämta data från formuläret via metoder post
$name = htmlspecialchars($_POST['yourname']);
$mail = htmlspecialchars($_POST['yourmail']);
$leveransadress = htmlspecialchars($_POST['leveransadress']);
$yourmessage = htmlspecialchars($_POST['yourmessage']);

//Från hidden inbut som kommer innehåller info från index sidan knappen,
$vara = htmlspecialchars($_POST['vara']);
$pris = htmlspecialchars($_POST['pris']);

// webshop mail adress
$to = "Niklas.Sawensten@yh.nackademin.se";

// Ämnesrad till mailet
$subject = "Beställning från $name.";
$kopiasubject = "Bekräftelse av din beställning.";

//Vem som skickar mailet
$headers = "From: " .$mail. "\r\n";
$headers .= "Reply-To: ".$mail. "\r\n";
$kopiaheaders = "From: " .$to. "\r\n";

//Fungerar ej????
//---------------
//$headers .= "Cc: " .$mail. " \r\n";
//---------------

//För snyggare mail
$headers .= "MIME-Version: 1.0\r\n";
$kopiaheaders .= "MIME-Version: 1.0\r\n";

//Vid problem med åäö
$headers .= "Content-Type: text/html; charset=utf-8\r\n";
$kopiaheaders .= "Content-Type: text/html; charset=utf-8\r\n";

// Mailet meddelandet
$message = '<html><body>';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . $name . "</td></tr>";
$message .= "<tr><td><strong>Email:</strong> </td><td>" . $mail. "</td></tr>";
$message .= "<tr><td><strong>Beställning:</strong> </td><td>" . $vara. "</td></tr>";
$message .= "<tr><td><strong>Pris:</strong> </td><td>" . $pris. "</td></tr>";
$message .= "<tr><td><strong>Kundens Leverans adress :</strong> </td><td>" . $leveransadress. "</td></tr>";
$message .= "<tr><td><strong>Meddelande :</strong> </td><td>" . $yourmessage. "</td></tr>";
$message .= "</table>";
$message .= "</body></html>";



if(isset($_POST['yourmail'])){
    //Skickar till Niklas.Sawensten@yh.nackademin.se
    mail($to , $subject, $message, $headers); 
    //Skickar till kunden
    mail($mail , $kopiasubject, $message, $kopiaheaders); 
    echo "<h2>Din beställning är på väg.</h2>";
    echo "<h2>Kommer inom ca tre arbetsdagar.</h2>";
    echo "<br><a href='index.php' class='btn btn-primary'>gå tillbaka till startsidan</a>";
}
else{
    echo "<h2>Felaktig adress!</h2>";
}

/*
echo "<hr><h2>Felsökning</h2>";
echo "<h3>";
print "<pre>POST ";
print_r($_POST);
print "</pre>";
echo "<hr>";
print "<pre>GET ";
print_r($_GET);
print "</pre>";
echo "</h3>";
*/
?>
<?php include 'footer.php';?>

