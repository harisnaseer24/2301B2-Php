<?php 
require("../essentials/config.php");

$id=$_POST['userid'];

$restore="UPDATE `user_info` SET `status`=1 WHERE id='$id';";
$result=mysqli_query($conn, $restore) or die("query failed");
if($result){
    echo mysqli_affected_rows($conn)." row/rows has been effected.";
}else{
    echo"Something went wrong..!";
}


?>