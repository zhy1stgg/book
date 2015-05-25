 <?php
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
         require("phpmailer/PHPMailerAutoload.php");
        $mail = new PHPMailer();

        // ---------- adjust these lines ---------------------------------------
        $mail->Username = "cofi9telep@gmail.com"; // your GMail user name
        $mail->Password = "r3tr0cofi"; 
        $mail->AddAddress("roll4@outlook.com"); // recipients email
        $mail->FromName = $_POST["firstname"] . " (" .  $_POST["email"] . ")"; // readable name
        $mail->From = $_POST["email"];
        $mail->Subject = $_POST["subject"];
        $mail->Body    = $_POST["body"]; 
        //-----------------------------------------------------------------------

        $mail->Host = "smtp.gmail.com"; // GMail
        $mail->Port = 465;
        $mail->IsSMTP(); // use SMTP
        $mail->SMTPSecure = 'ssl';
        $mail->SMTPAuth = true; // turn on SMTP authentication
        

        if(!$mail->Send())
            echo "Mailer Error: " . $mail->ErrorInfo;
        else
            echo "Message has been sent";
        }
?>