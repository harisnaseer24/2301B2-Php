<?php 
include "../essentials/header.php";
include "../essentials/config.php";

$limit=2;
if(isset($_GET['page'])){

$page=$_GET['page'];

}else{
    $page=1;
}

$offset=($page -1)*$limit;// offset starts from 2nd record

$query="SELECT * FROM student limit $offset, $limit;";
$res=mysqli_query( $conn,$query) or die("failed to execute query.");

if(mysqli_num_rows($res)>0){
    // echo" record found";
    ?>
<body>
    <div class="container">
<caption><h1 class="text-center">Student Table</h1></caption>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Age</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>        
<?php 
  while($row=mysqli_fetch_assoc($res)){
echo "<tr>";
    echo "<td scope='row'>".$row['id']."</td>";
     echo "<td>".$row['sname']."</td>";
     echo "<td>".$row['address']."</td>";
     echo "<td>".$row['age']."</td>";
     echo "<td> 
     <a href='updaterec.php?id=".$row['id']."' class='btn btn-success'>Update</a>
     <a href='delete.php?id=".$row['id']."' class='btn btn-danger'>Delete</a>
     </td>";
     echo "</tr>";
  }?>
  </tbody>
</table>
<?php 

// totalrec=30
// limit=3
// pages= totalrec/limit=30/3=10
$sql="SELECT * FROM student;";
$result=mysqli_query($conn, $sql) or die("Query failed");
$totalrec= mysqli_num_rows($result) ;

$totalpages=ceil($totalrec/$limit);

echo'<nav aria-label="Page navigation example" class="d-flex justify-content-center">
<ul class="pagination">';
if($page > 1){
echo'
  <li class="page-item">
    <a class="page-link" href="pagination.php?page='.($page-1).'" aria-label="Previous">
      <span aria-hidden="true">&laquo;</span>
    </a>
  </li>';}

for($i=1; $i<=$totalpages; $i++){
    if($page == $i){ //2 == 2
        $activeclass="active";
       
    }else{
        $activeclass="";
    }
echo '  <li class="page-item '.$activeclass.'"><a class="page-link" href="pagination.php?page='.$i.'">'.$i.'</a></li>';
}

if($page < $totalpages ){
  echo'
  <li class="page-item">
    <a class="page-link" href="pagination.php?page='.($page+1).'" aria-label="Next">
      <span aria-hidden="true">&raquo;</span>
    </a>
  </li>';
}

echo'
</ul>
</nav>';

}
else{
    echo"no record found";
    mysqli_close($conn);
}


?>
</div>
</body>
</html>

