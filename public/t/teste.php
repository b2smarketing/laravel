<?php
$to      = 'willreli@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: noreply@vestibularfam.com.br' . "\r\n" .
    'Reply-To: noreply@vestibularfam.com.br' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>
