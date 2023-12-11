<?php 
include "../essentials/header.php";
require "../essentials/config.php";
include("./nav.php");

if(isset($_POST['submit'])){
$brand_id=$_POST['brand'];
$name=$_POST['name'];
$price=$_POST['price'];
echo"<pre>";
print_r($_FILES);
echo"</pre>";

if($_FILES['image']['error']==4){
  echo"<script>alert('image does not exist')</script>";
}

else{
    $imagename=$_FILES['image']['name'];
    $imagsize=$_FILES['image']['size'];
    $tmpname=$_FILES['image']['tmp_name'];
$validExtension=['jpg','png','jpeg'];


 $extension=explode(".",$imagename);
echo"<pre>";
print_r($extension);
echo"</pre>";

$extension=strtolower(end($extension));//jpg

    if($imagsize > 2000000){
        echo"<script>alert('File is too large.')</script>";
    }
    elseif(!in_array($extension,$validExtension)){
        echo"<script>alert('File type not supported.')</script>";
    }
    else{
      $newimgname=uniqid(); 
       $newimgname .= ".".$extension;//67564565656456.jpg
       
move_uploaded_file($tmpname,"img/".$newimgname);


       $query="INSERT INTO `mobiles`( `name`, `price`, `image`,`brand_id`) VALUES ('$name','$price','$newimgname','$brand_id');";
    $result=mysqli_query($conn,$query);
    if($result){
        echo"<script>alert('Mobile added succesfully in database')</script>";
    }
    else{
        echo"<script>alert('Mobile is not succesfully added in database')</script>";
    }

    }
}
}

?>
<body>
    <div class="container my-5 "style="min-height:80vh;">
        <h1 class="text-center display-3 fw-semibold">Welcome to <img class="img-fluid" src="./img/logo2.png" width=120 alt=""></h1>
<form action="" method="post" enctype="multipart/form-data">
<input class="form-control my-3" type="text" name="name" id="name" placeholder="Enter mobile's name">
<input class="form-control my-3" type="number" name="price" id="price" placeholder="Enter mobile's price">
<select class="form-control my-3"  name="brand" id="brand" placeholder="Select mobile's brand">
    <option value="" selected disabled>Choose brand</option>
    <?php 
    
    $query1="SELECT * FROM `brands`;";
    $result1=mysqli_query($conn, $query1) or die("failed to execute");
    if(mysqli_num_rows($result1) > 0){
        while($row1=mysqli_fetch_assoc($result1)){
            ?>
            <option value="<?=$row1['brand_id']?>"><?=$row1['brand_name']?></option>
              
            <?php
        }
    }
    
    ?>
<input class="form-control my-3" type="file" name="image" id="image" accept=".jpg, .png, .jpeg">
<input class="form-control my-3 btn" type="submit" name="submit" value="ADD" style="background-color: #0a4275; color:white;">


</form>

    </div>

<?php 
include("footer.php");?></body>
</html>