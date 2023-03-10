<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

function randomString($length = 8) {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < $length; $i++) {
        $n=rand(0, $alphaLength); $pass[]=$alphabet[$n]; 
    } 
    return implode($pass); 
}

function sendMail($recipientName, $recipientEmail, $subject, $body)
{
    $senderEmail = "miendjemthierry01@gmail.com";
    $senderName = "Miendjem Thierry";
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
    //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER; //Enable verbose debug output
        $mail->isSMTP(); //Send using SMTP
        $mail->SMTPDebug=0;
        $mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
        $mail->SMTPAuth = true; //Enable SMTP authentication
        $mail->Username = $senderEmail; //SMTP username
        $mail->Password = "jxmyxgvqrtiwczhm"; //SMTP password //jfltubgqbwniivya
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
        $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom($senderEmail, $senderName);
        $mail->addAddress($recipientEmail); //Name is optional
        $mail->addReplyTo($recipientEmail, $recipientName);
        // $mail->addCC($recipientEmail);
        // $mail->addBCC($recipientName);

        //Attachments
        // if (count($attachmentsArray) > 0) {
        // $mail->addAttachment('/var/tmp/file.tar.gz');
        // foreach ($attachmentsArray as $attachment) {
        // $mail->addAttachment($attachment->path, $attachment->name);
        // }
        // }

        //Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $body;

        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}

function uploadFile($target_dir, $file){
    $response = [];

    $time = strtotime("now");
    $name = randomString(16) . basename($file["name"]);
    $target_file = $target_dir .$name;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($file["tmp_name"]);
        if($check !== false) {
            $response['message'] = "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            $response['message'] = "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        $response['message'] = "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($file["size"] > 500000) {
        $response['message'] = "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        $response['message'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 1) {
        if (move_uploaded_file($file["tmp_name"], $target_file)) {
            $response['message'] = $name;
        } else {
            $response['message'] = "Sorry, there was an error uploading your file.";
        }
    }

    if($uploadOk == 0){
        $response['status'] = false;
    }else{
        $response['status'] = true;
    }
    return $response;
}
?>