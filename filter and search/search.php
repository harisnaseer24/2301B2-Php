<?php 
include("../essentials/header.php");
include("../essentials/config.php");
include("nav.php");

?><style>
    .abc{
       min-height:80vh;
    }
</style>
<div class="container abc" >
<div class="row">
<?php 
if(isset($_GET['search'])){
$search=$_GET['search'];
   $searchQuery="SELECT * FROM `mobiles` m inner join brands b on m.brand_id=b.brand_id WHERE m.name like '%$search%' OR m.price like '%$search%' OR b.brand_name like '%$search%'";
   $result=mysqli_query($conn, $searchQuery) or die("failed");
   if(mysqli_num_rows($result) > 0){
    while($row=mysqli_fetch_assoc($result)){
        $image=$row["image"];    
    echo'
    <div class="col-lg-4 col-md-6 col-sm-12 my-4 rounded-4">
    <div class="card" style="border:none;" >
      <img src="./img/'.$image.'" class="card-img-top" alt="..." height=530>
      <div class="card-body">
        <h5 class="card-title">'.$row["name"].'</h5>
        <a href="#" class="btn btn-primary">'.$row["price"].'</a>
      </div>
    </div>
    </div>
    ';
        }
   }else{
echo"<h1 class='my-5 display-3 text-primary text-center'>Nothing to show.<h1>";
}
}
else{
    echo"<h1 class='my-5 display-3 text-primary text-center'>Nothing to show.<h1>";
}

?>
</div>
</div>





<?php 
include("footer.php");

?>