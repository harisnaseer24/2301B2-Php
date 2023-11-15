<?php 
include "../essentials/header.php";
require "../essentials/config.php";

if(isset($_POST['submit'])){
$name=$_POST['name'];
$price=$_POST['price'];
// echo"<pre>";
// print_r($_FILES);
// echo"</pre>";

if($_FILES['image']['error']==4){
  echo"<script>alert('image does not exist')</script>";
}
else{
    $imagename=$_FILES['image']['name'];
    $imagsize=$_FILES['image']['size'];
    $tmpname=$_FILES['image']['tmp_name'];
$validExtension=['jpg','png','jpeg'];

$extension=explode(".",$imagename);
// echo"<pre>";
// print_r($extension);
// echo"</pre>";

 $extension=strtolower(end($extension));//jpg

    if($imagsize > 1000000){
        echo"<script>alert('File is too large.')</script>";
    }
    elseif(!in_array($extension,$validExtension)){
        echo"<script>alert('File type not supported.')</script>";
    }
    else{
      $newimgname=uniqid(); 
       $newimgname .= ".".$extension;
move_uploaded_file($tmpname,"img/".$newimgname);


       $query="INSERT INTO `mobiles`( `name`, `price`, `image`) VALUES ('$name','$price','$newimgname');";
    $result=mysqli_query($conn,$query);
    if($result){
        echo"<script>alert('Mobile added succesfully in database')</script>";
    }
    else{
        echo"<script>alert('Mobile added succesfully in database')</script>";
    }

    }
}
}

?>
<body>
    <div class="container">
        <h1 class="text-center display-3 fw-semibold">PRODUCT REGISTERATION</h1>
<form action="" method="post" enctype="multipart/form-data">
<input class="form-control my-3" type="text" name="name" id="name" placeholder="Enter mobile's name">
<input class="form-control my-3" type="number" name="price" id="price" placeholder="Enter mobile's price">
<input class="form-control my-3" type="file" name="image" id="image" accept=".jpg, .png, .jpeg">
<input class="form-control my-3 btn btn-success" type="submit" name="submit" value="ADD">


</form>

    </div>
</body>
</html>