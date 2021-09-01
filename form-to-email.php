<?php
if(!isset($_POST['submit'])) {
	//this page should not be accessed directly, need to submit the form
	echo "Diese Seite kann nicht betreten werden. Gehe bitte auf olvrwn.github.io!";
}

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
	
$email_from = 'olvsoftware@icloud.com';
$email_subject = "$subject";
$email_body = "Neue Nachricht von $name / $email:\n\n $message";

$to = 'olvsoftware@icloud.com';
$headers = "von: $email_from \r\n";

//send the email
mail($to, $email_subject, $email_body, $headers);

echo "Deine Nachricht wurde erfolgreich verschickt."
	
?>