
<?php 
include "header.php";
require "config.php";


if($_GET["id"]){
 $id= $_GET["id"];

    $query="SELECT * FROM `student` WHERE `id`=$id;";

    $result=mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0){

        while($row=mysqli_fetch_assoc($result)){

          $stdname=$row['sname'];
         $address=$row['address'];
          $age=$row['age'];
?>
           <div class="container my-4">
            <h1 class="text-center">Update Student Details</h1>
            
           <form action="recordupdated.php" method="POST" class="form-group">
           
           
           <input type="hidden" class= "form-control my-2"name="id" value="<?php echo $id ?>"><br>
           <input type="text" class= "form-control my-2"name="sname" id="" placeholder="Enter student name" value="<?php echo $stdname ?>"><br>
           <input type="text" class= "form-control my-2"name="address" id="" placeholder="Enter student address"value="<?php echo $address ?>"><br>
           <input type="text" class= "form-control my-2"name="age" id="" placeholder="Enter student age"value="<?php echo $age ?>"><br>
           <input type="submit" class= "form-control my-2 btn btn-success"value="Update" name="submit">
           
           </form>
           
           </div>
           <?php 

        }


    }
}
 
 
else{
    echo "id not found";
}

    
   ?>
    </body>
    </html>






