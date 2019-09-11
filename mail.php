<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];
$formcontent = "From:" . $name . " Message:" . $comment;
$recipient = "info@adfranks.com";
$subject = "Web Development";
$mailheader = "From:" . $email . "\r\n";
mail($recipient, $subject, $formcontent, $mailheader);
echo "Thank You!" . " <a href='portfolio.html'>Go back to the portfolio.</a>";
?>
