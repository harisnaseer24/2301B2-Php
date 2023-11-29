<?php 
require('../essentials/config.php');
// print_r($_POST);

$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];

if(!$name=="" && !$email=="" && !$pass==""){


$insert= "INSERT INTO `user_info`(`id`, `name`, `email`, `password`) VALUES ('$id','$name','$email','$pass')";
$result=mysqli_query($conn, $insert) or die("failed");


if($result){
    echo "'Record Inserted Successfully.'";
}
else{
    echo "failed to insert record.";
}
}else{
    echo "please insert all values.";
}


?>
