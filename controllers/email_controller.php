<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';
require_once 'form_controller.php';



// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                   // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'onesteprdinc@gmail.com';                     // SMTP username
    $mail->Password   = 'jpolanco54321';                               // SMTP password
    $mail->SMTPSecure = "tsl";         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('onesteprdinc@gmail.com');
    $mail->addAddress('jpolanco@onesteprd.com');     // Add a recipient
 
    // Attachments
            // Add attachments
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Solicitud de compra!';
    $mail->Body    = '<h3> Solicitud de compra de:</h3>'.
                      '<p> Nombre: '. $_POST['nombre'].'</p>'.
                      '<p> Apellido: '. $_POST['apellido'].'</p>'.
                      '<p> Email: '. $_POST['email'].'</p>'.
                      '<p> Telefono: '. $_POST['tel_cel'].'</p>'.
                      '<p> Direccion: '. $_POST['direccion'].'</p>'.
                      '<p> Ciudad: '. $_POST['ciudad']. '</p>'. 
                      '<p> Unidade/s: '. $_POST['cantidad']. '</p>'.
                      '<p> Color: '. $_POST['color']. '</p>'. 
                      '<p> Comentarios: '. $_POST['coment']. '</p>';

                      
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}