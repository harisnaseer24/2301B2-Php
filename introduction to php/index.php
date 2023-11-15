<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Introduction to PHP by<?php
$fname="Haris";
echo $fname ?> </h1>
<?php 
    $fname="Haris";//string
    $lname="Naseer";#string
    $age= 24;//integer
    $sal= 25424.44;//float
/*multi
line
comments*/

    print($fname."\t");
    echo ($fname." ".'<span> S/O </span>'.$lname);
    echo "HELLO WORLD! <br>";
    // echo (PHP_INT_MAX);
    $STUDENTS=[1,2,3,4,5,"HARIS"] ;//LENGTH =6 INDEXES=5


    $str="i love PROGRAMMING";
     echo (strlen($str)."<br>");
     echo (str_word_count($str)."<br>");
     echo (strrev($str)."<br>");
     echo (ucwords($str)."<br>");

    //  echo(abs(-5.89));
    //  echo(round(5.5));
    //  echo(ceil(5.19));
    //  echo(floor(5.89));
    //  echo(min(-5.89,0,7));
    //  echo(max(-5.89,0,7));
    //  echo(sqrt(729));
    //  echo(rand());
    $age=11;
if($age>18 ){
    echo "<h3>You are eligible</h3>";
}elseif($age==18){
        echo "<h3>You have just got eligible</h3>";
}
else{
    echo "<h3>You are not eligible</h3>";
}

// $Age=23;
// echo "$age , $Age";

// $num=12;

// for(    $i = 1;   $i <= 10 ; $i++){
// echo "$num X $i = ".$num*$i." <br>";
// }

// $j=1;
// $num2=24;
// while($j<=10){
//     echo "$num2 X $j = ".$num2*$j." <br>";  
//     $j++;
// }
// echo "$num2 X $j = ".$num2*$j." <br>";  

$cars= array("Mustang","Audi","Supra","Mercedes","Buggati Chiron");

// echo "<br>".$cars;

echo "<pre>";
print_r($cars);
echo "</pre>";

    ?>
   

</body>
</html>