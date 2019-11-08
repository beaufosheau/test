<?php
if($_POST["submit"]) {
  $recipient="beau@murraymacrecords";
  $subject="Form to email message";
  $sender=$_POST["sender"];
  $senderEmail=$_POST["senderEmail"];
  $message=$_POST["message"];

  $mailBody="Name: $sender\nEmail: $senderEmail\n\nPhone: $senderPhone\nArea: $senderLocation";

  mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

  $thankYou="<p>Thank you! Your message has been sent.</p><br>
  <br>
  <a href=\"index.html\">Return</a>";
}
?>

<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Form Sent | Snow Removal Wisconsin</title>
</head>

<body>

    <?=$thankYou ?>

</body>

</html>