<?php 


require("../essentials/config.php");
$id=$_POST['userid'];

$sql="SELECT * from `user_info` WHERE id='$id';";
$result=mysqli_query($conn, $sql) or die("query failed");
if(mysqli_num_rows($result) > 0){
    $data=  mysqli_fetch_assoc($result);
    echo json_encode($data);
}else{
    echo"Something went wrong..!";
}


?>


