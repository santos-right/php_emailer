<?php
    use PHPMailer\PHPMailer\PHPMailer;

    if(isset($_POST['name']) && isset($_POST['email'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $body = $_POST['body'];

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        $mail = new PHPMailer();

        // SMPT settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = ""; // heter is for the user email address
        $mail->Password = ''; //here is meant to be for the user password
        $mail->Port = 465; //587
        $mail->SMTPSecure = "ssl"; //tls

        //Email settings
        $mail->isHTML(true);
        $mail->setFrom($mail, $name);
        $mail->addAddress(""); // heter is for the user email address
        $mail->Subject = $subject;
        $mail->Body = $body;

        if($mail->send()){
            $status = "Success";
            $response = "Email is sent";
        }else{
            $status = "Failed";
            $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }
        exit(json_encode(array(status => $status, "response" => $response)));
    }
?>