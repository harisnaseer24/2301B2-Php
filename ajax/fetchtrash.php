<?php 
require('../essentials/config.php');
$sql= "SELECT * FROM `user_info` where status =0;";
$result=mysqli_query($conn, $sql) or die("failed");

if(mysqli_num_rows($result) > 0){
    while($row=mysqli_fetch_assoc($result)){

echo'
<tr>
    <td>'.$row["id"].'</td>
    <td>'.$row["name"].'</td>
    <td>'.$row["email"].'</td>
    <td>'.$row["password"].'</td>
    <td><button data-id="'.$row["id"].'" class="btn restorebtn"><i class="fa-solid fa-rotate-right"></i></button></td>
    <td><button data-id="'.$row["id"].'" class="btn deletebtn"><i class="fa-solid fa-x"></i></button></td>
</tr>';
    }
}
?>
