<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ARRAYS IN PHP</h1>
    <?php
    // indexed array
    $numbers=array(10,20,30,40);
    // echo "$numbers[3]";

    foreach ($numbers as $key => $value) {
       echo "$value <br>";
    }
    
    //associative array
    $result = [

        "haris"=>"80%",
        "mohsin"=>"68%",
        "basit"=>"65%",
        "ahmed"=>"60%",
        "marfia"=>"70%",
        "fariya"=>"75%"
    ];

//    echo $result['mohsin'];
foreach ($result as $key => $value) {
    echo "$key got $value <br>";
}

//multidimensional array
// 4*4 array 3*3
$employees=[
  0=>  ["owais",25,"manager",65000],
    1=> ["afzal",28,"asst. manager",55000],
  2=>  ["ebab",26,"team lead",60000],
   3=> ["usama",30,"Sr. team lead",80000]
];

// echo $employees[1][3];
echo "<pre>";
print_r($employees);
echo "</pre>";

echo"<table border=1 cellpadding=5px>";
echo"<tr>
<th>Emp Name</th>
<th>Age</th>
<th>Designation</th>
<th>Salary</th>
</tr>";
foreach ($employees as $key => $value1) {
    echo"<tr>";
    foreach ($value1 as $key => $value2) {

        echo "<td>$value2 </td>";
    }
    echo "</tr>";
}
echo"</table>";
//multidimensional associative array

$marks=[
// key   |               value
 "Haris"=>["comp"=>85,"maths"=>100, "eng"=>75],

  //         key    | value
 "Owais"=>["comp"=>    75,      "maths"=>100, "eng"=>85],
 "Afzal"=>["comp"=>65,"maths"=>70, "eng"=>55]

];
    
echo "<pre>";
print_r($marks);
echo "</pre>";



echo"<table border=1 cellpadding=5px>";
echo"<tr>
<th>Name</th>
<th>Computer</th>
<th>Maths</th>
<th>English</th>
</tr>";
foreach ($marks as $key => $value) {
    echo "<tr>";
    echo "<td>$key</td>";

    foreach ($value as $key1 => $value1) {
   echo "<td>$value1</td>";
  
}
echo "</tr>";


}
echo"</table>"


    ?>
    
</body>
</html>