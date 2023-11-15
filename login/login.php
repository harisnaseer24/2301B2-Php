<?php 

include "../essentials/header.php";
require "../essentials/config.php";

if(isset($_POST['login'])){
$loginemail=mysqli_real_escape_string($conn, $_POST['loginemail']);
$loginpass=mysqli_real_escape_string($conn, $_POST['loginpass']);

$query="SELECT * FROM `user` WHERE `email`='$loginemail';";
$result=mysqli_query($conn, $query);
if($result){
 if(mysqli_num_rows($result) == 1){
$row=mysqli_fetch_assoc($result);
$email= $row['email'];
echo $securepass= $row['password'];

$pass_verification=password_verify($loginpass,$securepass);
if($pass_verification){
    header("location: home.php");
}
else{
    echo "<script>alert('Invalid credentials.')</script>";
}
 }
 else{
    echo "<script>alert('No record found please signup first.')</script>";
 }
}else{
    echo "<script>alert('fail to login')</script>";
}
}

?>
<head>
    
    <title>Log in</title>
</head>
<body>
<div class="container my-4">
    <form action="" method="post" class="form-group">
<h2 class="text-center">Login to your account</h2> 
    <input type="email" name="loginemail" id="" class="form-control my-2" placeholder="Enter email">
    <input type="password" name="loginpass" id="" class="form-control my-2" placeholder="Enter password">
    <input type="submit" name="login" id="" class="form-control btn btn-primary my-2">
    </form>
</div>
</body>
</html>