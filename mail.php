<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];
$formcontent = "From:" . $name . " Message:" . $comment;
$recipient = "info@adfranks.com";
$subject = "Web Development";
$mailheader = "From:" . $email . "\r\n";

mail($recipient, $subject, $formcontent, $mailheader);

echo "<div style='height:100%;text-align:center;background-color:#66ff66;color:green;padding:2em;font-size:3em;'>
    <h1>Thank You!</h1>
    <p><a href='index.html' style='color:#663300;'>
    Portfolio</a><br><br>
    <a href='https://github.com/adfranks' style='color:#663300;'>
    GitHub</a></p></div>";
?>
