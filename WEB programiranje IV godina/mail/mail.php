<?php
$por1 = $_POST['name'];
$por2 = $_POST['mail'];
$por3 = $_POST['message'];

$to_email = $por2;
$subject = $por1;
$body = $por3;
$headers = "From: veljko.kosta12@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email je poslat $to_email...";
} else {
    echo "Email nije poslat";
}
