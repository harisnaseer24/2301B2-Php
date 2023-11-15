<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">


<input type="text" name="sname" id="" placeholder="Enter student name"><br>
<input type="text" name="address" id="" placeholder="Enter student address"><br>
<input type="text" name="age" id="" placeholder="Enter student age"><br>
<input type="submit" value="Add Record" name="submit">

</form>
<?php 
require "config.php";

if(isset($_POST['submit'])){

$stdname= $_POST['sname'];
$address= $_POST['address'];
$age= $_POST['age'];


    $query="INSERT INTO `student`(`sname`, `address`, `age`) VALUES ('$stdname','$address','$age')";

    $result= mysqli_query($conn,$query);
    if($result){
        echo "<script>alert('Record Inserted Successfully.')</script>";

    }
    else{
        echo "<script>alert('failed to insert record.')</script>";
    }



}


?>
</body>
</html>