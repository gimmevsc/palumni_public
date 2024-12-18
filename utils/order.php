<?php
session_start();
include("../env/env.php");
include("./functions.php");
include("./customer_email.php");
use PHPMailer\PHPMailer\PHPMailer;


require 'phpmailer/src/Exception.php';

require 'phpmailer/src/PHPMailer.php';

require 'phpmailer/src/SMTP.php';

$url = $_POST["url"];
if(isLocalhost()){
    $url = 'http://'.$_POST["url"];
}


if (isset($_POST["submit"])) {

    $owners_emails = explode(',', $_ENV['OWNERS_EMAILS']);

    
    $name = htmlspecialchars($_POST["name"]);

    $email = htmlspecialchars($_POST["email"]);

    $service = htmlspecialchars($_POST["service"]);

    $budget = htmlspecialchars($_POST["budget"]);

    $message = htmlspecialchars($_POST["message"]);

    $ip = $_SERVER['REMOTE_ADDR']; 

    $country ='';
    try{
        $lang_url = 'http://ip-api.com/json/'.$ip;
    
        $response = file_get_contents($lang_url);
        
        if ($response === false) {
            throw new Exception("Response error");
        } else {
            $country = json_decode($response)->country;
        }
    }catch(Exception $e){}
    
    //send a code to email

    $mail = new PHPMailer(true);

    $mail->isSMTP();

    $mail->Host = $_ENV['MAIL_HOST'];

    $mail->SMTPAuth = true;

    $mail->Username = $_ENV['MAIL_USERNAME'];

    $mail->Password = str_replace(',', ' ', $_ENV['MAIL_PASSWORD']);

    $mail->SMTPSecure = 'ssl';

    $mail->Port = $_ENV['MAIL_PORT'];

    $mail->setFrom($_ENV['MAIL_USERNAME']);

    foreach ($owners_emails as $key => $owner_email) {
        $mail->addAddress($owner_email);
    }

    $mail->isHTML(true);

    $mail->Subject = "New order from site Palumni";

    $mail->Body = "Name: $name<br>Message: $message<br>Budget: $budget<br>Service: $service<br>Email: $email<br>Location: $country<br>IP: $ip";

    $mail->send();

    //Sending mail to customer
    $mail = new PHPMailer(true);

    $mail->isSMTP();

    $mail->Host = $_ENV['MAIL_HOST'];

    $mail->SMTPAuth = true;

    $mail->Username = $_ENV['MAIL_USERNAME'];

    $mail->Password = str_replace(',', ' ', $_ENV['MAIL_PASSWORD']);

    $mail->SMTPSecure = 'ssl';

    $mail->Port = $_ENV['MAIL_PORT'];

    $mail->setFrom($_ENV['MAIL_USERNAME']);


    $mail->addAddress($email);
 

    $mail->isHTML(true);

    $mail->Subject = $subject;

    $mail->Body = $customer_email;

    $mail->send();

}

$_SESSION['order'] = 'success';

header("Location: $url");

exit;
?>