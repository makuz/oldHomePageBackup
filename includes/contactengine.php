<?php include("header.php"); ?>

<div class="thank_you">
<h1 class="thank_h1">

<?php
	$to = "marcin.kuzdowicz@wp.pl";
	$name = $_POST["name"];
	$subject = $_POST["subject"];
	$email = $_POST["email"];
	$message = $_POST["message"];
	
	$from = $email;
	$headers = "This message is from: " . $name . "<br/> " . "email address: " . $from . "<br/> " . "Subject: " . $subject;
	
	mail($to, $subject, $message, $headers);
	
	echo "Dziękuje za wysłanie wiadomości!" . "<br/>";
?>
</h1>
</div>

<?php include("footer.php"); ?>