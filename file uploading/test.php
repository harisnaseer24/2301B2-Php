<?php 
$con=mysqli_connect("localhost","root","","inotes");
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    // echo"<pre>";
    // print_r($_FILES['image']);
    // echo"</pre>";
    if($_FILES['image']['error']==4){
echo "
<script>
    alert('Image does not exist');
</script>
";

    }
    else{
        $filename=$_FILES['image']['name'];
        $filesize=$_FILES['image']['size'];
        $tmpname=$_FILES['image']['tmp_name'];

        $validExtension=["jpg","jpeg","png"];
        $fileExtension=explode(".",$filename);
        // print_r($fileExtension);

      $fileExtension=strtolower(end($fileExtension));
       if(!in_array($fileExtension,$validExtension)){
echo "
<script>
    alert('Image type does not supported');
</script>
";

       }
       elseif ($filesize > 1000000) {

      echo "
<script>
    alert('Image size too large');
</script>
";
       }
       else{



$newimagename=uniqid();
        $newimagename .="." .$fileExtension;


        move_uploaded_file($tmpname,"img/".$newimagename);
        $query="INSERT INTO `images`( `name`, `image`) VALUES ('$name','$newimagename');";
        $res=mysqli_query($con,$query);
        echo "
        <script>
            alert('Success');
        </script>
        ";
       }
    }
}
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" autocomplete="off" enctype="multipart/form-data">
        
        <input type="text" name="name" id="">
        <input type="file" name="image" id="image" accept=".jpg,.jpeg,.png,.mp4">
        <input type="submit" value="submit" name="submit">


    </form>
</body>
</html>