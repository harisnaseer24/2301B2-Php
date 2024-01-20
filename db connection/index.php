<?php 
   include "header.php";
   require "config.php";
?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">


<?php

    $query="SELECT * FROM student;";

    $res=mysqli_query( $conn,$query) or die("failed to execute query.");
    
    if(mysqli_num_rows($res)>0){
        // echo" record found";


        ?>
 

<body>
    <caption><h1 class="text-center">Student Table</h1></caption>
        <table border=1 cellpadding="7px" id="myTable">
           <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Age</th>
                <th>Actions</th>
            </tr>   
              </thead>  
            <tbody>
<?php
        
      while($row=mysqli_fetch_assoc($res)){
echo "<tr>";
        echo "<td>".$row['id']."</td>";
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
    
}
else{
        echo"no record found";
        mysqli_close($conn);
    }


    ?>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script>
        let table = new DataTable('#myTable');
    </script>
</body>
</html>