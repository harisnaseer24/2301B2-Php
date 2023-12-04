<?php 
require("../essentials/config.php");
$id=$_POST['userid'];
$trash="UPDATE `user_info` SET `status`=0 WHERE id='$id';";
$result=mysqli_query($conn, $trash) or die("query failed");
if($result){
    echo mysqli_affected_rows($conn)." row/rows has been effected.";
}else{
    echo"Something went wrong..!";
}


?>