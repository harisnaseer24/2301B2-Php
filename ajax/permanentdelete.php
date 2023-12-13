<?php 
require("../essentials/config.php");
$id=$_POST['userid'];
$permanentDelete="DELETE from `user_info` WHERE id='$id';";
$result=mysqli_query($conn, $permanentDelete) or die("query failed");
if($result){
    echo mysqli_affected_rows($conn)." row/rows has been effected. The Record has been deleted permanently.";
}else{
    echo"Something went wrong..!";
}


?>