<?php 
include "../essentials/header.php";
require "../essentials/config.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function  sendRecoveryLink($token, $recoveryemail, $username){
//Load Composer's autoloader
require '../vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    // //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'harisnaseer258@gmail.com';                     //SMTP username
    $mail->Password   = 'kfpn mtvk buqj ljat';                               //SMTP password
    $mail->SMTPSecure = 'TLS';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('harisnaseer258@gmail.com', 'The Coders');
    $mail->addAddress($recoveryemail, $username);     //Add a recipient
             
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'PASSWORD Recovery';
    $mail->Body    = 'Hello '.$username. ', this is a password recovery request generated by you. <b>Please <a href="http://localhost:82/2301B2%20php/login/resetpass.php?token='.$token.'&email='.$recoveryemail.'">Click here</a> to recover your password</b>';


    $mail->send();
    // echo"done";
    echo "<script>alert('A recovery link  has been sent to you at".$recoveryemail.".')</script>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

}



if(isset($_POST['reset-pass'])){

$recoveryemail=mysqli_real_escape_string($conn, $_POST['recoveryemail']);
$token=md5(rand());

$query="SELECT * FROM `user` WHERE `email`='$recoveryemail';";
$result=mysqli_query($conn, $query);
if($result){
 if(mysqli_num_rows($result) > 0){

$row=mysqli_fetch_assoc($result);

$id= $row['id'];
$email= $row['email'];
$username= $row['username'];

$updateToken="UPDATE `user` SET `recovery_token`='$token' WHERE `email`='$recoveryemail'; ";
$updateToken_run=mysqli_query($conn,  $updateToken) or die("failed");
if($updateToken){
    sendRecoveryLink($token, $recoveryemail, $username);
}
 }
 else{
    echo "<script>alert('No record found please signup first.')</script>";
    header("location: signup.php");
 }
}else{
    echo "<script>alert('fail to Recover')</script>";
}
}

?>
<head>
    
    <title>Forget Password</title>
</head>
<body>
<div class="container my-4">
    <div class="row">
        <div class="col-lg-6 mx-auto">

      
    <form action="" method="post" class="form-group">
<h2 class="text-center">Enter your email to recover your account</h2> 
    <input type="email" name="recoveryemail" id="" class="form-control my-2" placeholder="Enter email">
    
    <input type="submit" name="reset-pass" id="" class="form-control btn btn-primary my-2">
    </form>
    </div>
    </div>


</div>
</body>
</html>
