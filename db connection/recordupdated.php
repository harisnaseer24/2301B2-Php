<?php
// echo"<pre>";
// print_r($_POST);
// echo"</pre>";

require "config.php";

  $stdname= $_POST["sname"];
   $stdaddress= $_POST["address"];
  $stdage= $_POST["age"];
   $id= $_POST["id"];

    $query="UPDATE `student` SET `sname`='$stdname',`address`='$stdaddress',`age`='$stdage' WHERE `id`=$id;";
    $result=mysqli_query($conn, $query);
    if($result)
{

    echo "<script>alert('Record Update Successfully.')</script>";
    header("Location: index.php");

    }
    else{
        echo "<script>alert('failed to Update record.')</script>";
    }




?>