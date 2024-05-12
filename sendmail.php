<?php
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;

 require 'vendor/autoload.php';

 function sendConfirmationEmail($to_email, $confirmation_link)
 {
     $mail = new PHPMailer(true); // create a new object

     try {
         //Server settings
         $mail->isSMTP();                                            // Send using SMTP
         $mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through
         $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
         $mail->Username   = 'your_email@gmail.com';                 // SMTP username
         $mail->Password   = 'your_email_password';                   // SMTP password
         $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
         $mail->Port       = 587;                                    // TCP port to connect to

         //Recipients
         $mail->setFrom('your_email@gmail.com', 'Your Name');
         $mail->addAddress($to_email);                               // Add a recipient

         // Content
         $mail->isHTML(true);                                        // Set email format to HTML
         $mail->Subject = 'Confirm Your Registration';
         $mail->Body    = "Thank you for registering on our website. Please click on the following link to confirm your registration: $confirmation_link";

         $mail->send();
         return true;
     } catch (Exception $e) {
         return false;
     }
 }
```