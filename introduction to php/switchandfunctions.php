<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Switch</h1>
    <?php 

    $day= "sunday";
    switch ($day) {
        case 'sunday':
           echo "today is sunday";
          
        case 'monday':
           echo "today is monday";
        
        case 'tuesday':
           echo "today is tuesday";
       
        case 'wednesday':
           echo "today is wednesday";
       
        case 'thursday':
           echo "today is thursday";
        
        case 'friday':
           echo "today is friday";
          
        case 'saturday':
           echo "today is saturday";
         
        default:
        echo "enter valid day";
          
    }
    
    $age =17;
    switch (true) {
        case ($age >=18):
            echo " You can vote" ;
            break;
        
        default:
        echo " You can`t vote" ;
            break;
    }

    
    // functions
    function add($a=0,$b=0){
        // echo "the addition of given numbers is:".$a+$b; 
return $a+$b;
    }

$c=add(50,70);//120 
echo "the addition is: ".$c
    
    ?>
</body>
</html>