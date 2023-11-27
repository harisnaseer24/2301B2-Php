<?php 
include "../essentials/header.php";
require "../essentials/config.php";

if(isset($_POST['reset'])){

    if(isset($_GET['email'])){
    $email=$_GET['email'];
    }
else{
    $email="";
}
if(isset($_GET['token'])){
    $token=$_GET['token'];
}
else{
    $token="";
}

$newpassword=mysqli_real_escape_string($conn, $_POST['newpass']);
$cpass=mysqli_real_escape_string($conn, $_POST['cpass']);

$query="SELECT * FROM `user` WHERE `email`='$email' AND recovery_token='$token';";
$result=mysqli_query($conn, $query);
if($result){
 if(mysqli_num_rows($result) > 0){

$row=mysqli_fetch_assoc($result);
if($newpassword===$cpass){

    $newtoken=md5(rand());
    $newpass=password_hash($newpassword,PASSWORD_BCRYPT);

    $resetPass="UPDATE `user` SET `password`='$newpass',`recovery_token`='$newtoken' WHERE email= '$email'";
    $resetPass_run=mysqli_query($conn, $resetPass) or die("failed to reset pass");
if($resetPass_run){
    echo "<script>alert('Your password has been reset. Please login now with new password.');
    
    window.location.href='login.php';
    </script>";

}
}else{
    echo "<script>alert('Password does not match.')</script>";
}

}
else{
    echo "<script>alert('Invalid token.')</script>";
}
}
else{
    echo "<script>alert('query failed.')</script>";
}
}

?>
<head>
    
    <title>Reset Password</title>
</head>
<body>
<div class="container my-4">
    <form action="" method="post" class="form-group">
<h2 class="text-center">Enter New Password</h2> 
  
    <input type="password" name="newpass" id="" class="form-control my-2" placeholder="Enter password">
    <input type="password" name="cpass" id="" class="form-control my-2" placeholder="Confirm password">
    <a href="login.php">Login now..!</a>
    <input type="submit" name="reset" id="" class="form-control btn btn-primary my-2">
    </form>

Don't have account..? <a href="signup.php">Create Now..!</a>

</div>
</body>
</html>
