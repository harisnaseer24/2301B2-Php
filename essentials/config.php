<?php 

$server="localhost";
$username="root";
$dbpass="";
$dbname="demo";

$conn= mysqli_connect($server,$username,$dbpass,$dbname);


if(!$conn)
{
    die("failed to connect");
}
// else{
//    echo" connected successfully";
// }


?>