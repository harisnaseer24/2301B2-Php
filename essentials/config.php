<?php 

$server="localhost";
$username="root";
$dbpass="";
$dbname="2301B2";

$conn= mysqli_connect($server,$username,$dbpass,$dbname);


if(!$conn)
{
    die("failed to connect");
}
// else{
//    echo" connected successfully";
// }


?>