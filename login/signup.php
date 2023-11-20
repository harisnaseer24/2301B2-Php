<?php 
include "../essentials/header.php";
require "../essentials/config.php";
?>
    <title>Create Account</title>
<body>

<div class="container my-4">
    <form action="" method="post" class="form-group">
<h2 class="text-center">Create an account now..!</h2>
    <input type="text" name="username" id="" class="form-control my-2" placeholder="Enter username">
    <input type="email" name="email" id="" class="form-control my-2" placeholder="Enter email">
    <input type="password" name="password" id="" class="form-control my-2" placeholder="Enter password">
    <input type="submit" name="signup" id="" class="form-control btn btn-primary my-2">
    </form>
    Already have an account..? <a href="login.php">Login Now..!</a>
</div>
    <?php 
    if(isset($_POST['signup'])){
 $username=mysqli_real_escape_string($conn, $_POST['username']);
 $email=mysqli_real_escape_string($conn, $_POST['email']);
 $pass=mysqli_real_escape_string($conn, $_POST['password']);

echo $pass."<br>";
$securePass=password_hash( $pass, PASSWORD_BCRYPT);
// $securePass= md5($pass);

//check for duplicate
$check="SELECT * from user where email='$email';";
$result1=mysqli_query($conn, $check) or die("failed to run query");
if(mysqli_num_rows($result1) >0){
   echo" <script>alert('user already registered')</script>";
}else{
$query="INSERT INTO `user`( `username`, `email`, `password`) VALUES ('$username','$email','$securePass');";
$result=mysqli_query($conn, $query);
if($result){
    echo"
    <script>alert('Registration Successful. Please login Now..!')</script>";
    header("location: login.php");
}
else{
    echo"
    <script>alert('Fail to register')</script>";
}
}

    }
    
    
    
    
    ?>
</body>
</html>