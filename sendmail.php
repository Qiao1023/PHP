<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
//$to=$_POST["to"];
$subject=$_POST["subject"];
$content=$_POST["content"];
$content=nl2br($content);
$content.="</br><img src='https://truth.bahamut.com.tw/s01/201205/08a65d4ff20657a3032c6b3f47666106.PNG'>";
//Create an instance; passing `true` enables exceptions

$mail = new PHPMailer(true);
$link = mysqli_connect('localhost','root','','college');
$sql = "SELECT * FROM student";
$result = mysqli_query($link,$sql);
if (!$result) {
    die("Database query failed: " . mysqli_error($link));
}
try {
    $mail->SMTPDebug = false;
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'eshiu4@gmail.com';                     //SMTP username
    $mail->Password   = 'vzfw twjo klpy lnec';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->CharSet='Utf-8';
    //Recipients
    $mail->setFrom('a1113320@mail.nuk.edu.tw', 'Hahaha');        //Name is optional
    $mail->addReplyTo('a1113320@mail.nuk.edu.tw', 'Ya');
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    while($row = mysqli_fetch_assoc($result)){
        $email=$row["email"];
        $mail->clearAddresses();
        $mail->clearReplyTos();
        $mail->addAddress($email);
        $mail->Body    =$content;
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        try {
            $mail->send();
            echo "Message has been sent to {$email}<br>";
        } catch (Exception $e) {
            echo "Message could not be sent to {$email}. Mailer Error: {$mail->ErrorInfo}<br>";
        }
    }
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    
    //$mail->addAddress('a1113320@nuk.edu.tw', 'Joe User');     //Add a recipient
    //$mail->addAddress('a1113320@nuk.edu.tw');
    
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
mysqli_close($link);
?>