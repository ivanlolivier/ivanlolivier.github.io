<?php

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$message = trim($_POST['message']);

if (empty($subject)) {
    $subject = 'Message from your website.';
}
$body = "Name: $name \n\nEmail: $email \n\nMessage:\n$message";

shell_exec("curl -s --user 'api:key-f1cfc270c1565220f20a62d437a4abba' https://api.mailgun.net/v3/sandboxf9a56756dc7a41b898b4f3ae18b33add.mailgun.org/messages -F from='mailgun@sandboxf9a56756dc7a41b898b4f3ae18b33add.mailgun.org' -F to=ivan.lolivier@gmail.com -F subject='$subject' -F text='$body'");

echo('SEND');
