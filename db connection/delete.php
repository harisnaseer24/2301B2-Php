<?php 
require ("config.php");
include "header.php";


if($_GET['id']){
  $id=$_GET['id'];

   $sql="DELETE FROM `student` WHERE `id`= $id;";
   $run=mysqli_query($conn, $sql);

   if($run)
   {
    echo "<script>alert('Record Deleted Successfully.')</script>";
    // header("Location: index.php");

    }
    else{
        echo "<script>alert('failed to Delete this record.')</script>";
    }

      

}
    
    else{
        echo "id not found";
    }


?>