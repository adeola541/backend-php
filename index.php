<?php
   if (isset($_POST['submit'])) {
$name= trim($_POST['name']);
$name= trim($_POST['email']);
$name= trim($_POST['subject']);
$name= trim($_POST['message']);
   

$myMail= "";
$  = "from"/$email;
$message2 = "You have recieved a mail from". $name . ".\n\n" . $message;


mail($myMail,$subject,$messag2,$);
section("Location:index.html?mail.php");


   }

?>