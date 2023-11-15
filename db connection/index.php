<?php 
   include "header.php";
   require "config.php";


    $query="SELECT * FROM student;";

    $res=mysqli_query( $conn,$query) or die("failed to execute query.");
    
    if(mysqli_num_rows($res)>0){
        // echo" record found";


        ?>
    <style>

        table{
            background-color:rgba(144,44,144,0.7);
            width: 90%;
            margin:auto;
            font-size: 26px;
            color:white

        
        }
        th{
            background-color:black;
            color:white;
        }
    </style>

<body>
    <caption><h1 class="text-center">Student Table</h1></caption>
        <table border=1 cellpadding="7px">
           
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Age</th>
                <th>Actions</th>

            </tr>           
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
</table>

    <?php 
    
}
else{
        echo"no record found";
        mysqli_close($conn);
    }


    ?>
</body>
</html>