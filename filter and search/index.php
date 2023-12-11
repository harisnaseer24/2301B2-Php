<?php 
include("../essentials/header.php");
include("../essentials/config.php");
include("nav.php");
if(isset($_GET['brand_id'])){
    $br_id=$_GET['brand_id'];
    
         }else{
            $br_id="all";
         }
?>
<style>
.col-lg-4:hover{
    box-shadow: rgb(204, 219, 232) 3px 3px 6px 0px inset, rgba(255, 255, 255, 0.5) -3px -3px 6px 1px inset;
}
</style>

<h1 class='my-5 display-3 text-primary text-center'>Welcome to Code HN.<h1>
<div class="container my-4 d-flex justify-content-center flex-wrap">
<?php if($br_id=="all"){$active="active";}else{$active="";}?>
<a href="index.php?get=all" class="btn btn-outline-primary mx-2 py-2 px-3 rounded-5 <?=$active?>">ALL</a>
    <?php 
   
 
    $query="SELECT * FROM brands;";
    $result=mysqli_query($conn, $query) or die("failed to execute");
    if(mysqli_num_rows($result) > 0){
       
        while($row=mysqli_fetch_assoc($result)){
           
                if($br_id==$row["brand_id"]){
                $act_cat="active";}
                else{
                    $act_cat="";
                }
            

            ?>
            
            <a href="index.php?brand_id=<?=$row["brand_id"]?>" class="btn btn-outline-primary mx-2 py-2 px-3 rounded-5 <?=$act_cat?>"><?=$row["brand_name"]?></a>  
            <?php
        }
    }
    ?></div>
    <div class="container">
    <div class="row">
   
<?php 
if(isset($_GET['brand_id'])){
    $brand_id=$_GET['brand_id'];
    $getByBrand="SELECT * FROM `mobiles` as m inner JOIN brands as b on m.brand_id=b.brand_id where m.brand_id=$brand_id ORDER by id DESC ;";

    $result2=mysqli_query($conn, $getByBrand) or die("failed to execute");
    if(mysqli_num_rows($result2) > 0){
        while($row2=mysqli_fetch_assoc($result2)){
        $image=$row2["image"];    
    echo'
    <div class="col-lg-4 col-md-6 col-sm-12 my-4 rounded-4" data-aos="flip-right"
    data-aos-duration="500">
    <div class="card" style="border:none;">
      <img src="./img/'.$image.'" class="card-img-top" alt="..." height=530>
      <div class="card-body">
        <h5 class="card-title">'.$row2["name"].'</h5>
        <p>Powered by '.$row2["brand_name"].'</p>
        <a href="#" class="btn btn-primary">'.$row2["price"].'</a>
      </div>
    </div>
    </div>
    
    ';
        }}
}
else{
   
        $getALL="SELECT * FROM `mobiles`";
        $result1=mysqli_query($conn, $getALL) or die("failed to execute");
        if(mysqli_num_rows($result1) > 0){
            while($row1=mysqli_fetch_assoc($result1)){
            $image=$row1["image"];    
        echo'
        <div class="col-lg-4 col-md-6 col-sm-12 my-4 rounded-4" data-aos="fade-up"
        data-aos-anchor-placement="center">
        <div class="card" style="border:none;" >
          <img src="./img/'.$image.'" class="card-img-top" alt="..." height=530>
          <div class="card-body">
            <h5 class="card-title">'.$row1["name"].'</h5>
            <a href="#" class="btn btn-primary">'.$row1["price"].'</a>
          </div>
        </div>
        </div>
        
        ';
            }}
        
        }

?>

    </div>
</div>

<script>
  AOS.init();
</script>
<?php

include("footer.php");

?>