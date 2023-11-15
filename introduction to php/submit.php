<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php     
// echo "<pre>";

// print_r($_POST);
// echo "</pre>";

// echo ("Welcome ".$_POST['fname']." S/O ".$_POST['fathername']." to Our Website.")
echo ("Welcome ".$_REQUEST['fname']." S/O ".$_REQUEST['fathername']." to Our Website.")
    
    ?>
</body>
</html>