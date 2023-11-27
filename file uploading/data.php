<?php 
include "../essentials/header.php";
require "../essentials/config.php";
$get="SELECT * FROM mobiles;";
$result=mysqli_query($conn, $get) or die('failed to execute');
if(mysqli_num_rows($result) > 0)
{
    ?>
    <style>
        .card img{
            height: 400px;
        }
    </style>
    <body>
    <div class="container">
        <div class="row">
            <?php 
    while($row=mysqli_fetch_assoc($result)){
?>
  <div class="col-lg-4 col-md-6 col-sm-12 my-4">
            <div class="card">
  <img src="img/<?php echo $row['image']?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['name']?></h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Rs. <?php echo $row['price']?> </a>
  </div>
</div>
            </div>
<?php }?>
  </div>
    </div>
</body>
<?php  } ?>
</html>