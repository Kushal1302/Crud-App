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
    require 'database.php';
    $deleteSr = $_GET['deleteSr'];
    $sql = "delete from `crud` where `sr`=$deleteSr";
    $result = mysqli_query($conn , $sql);
    if($result){
        header('Location: developer.php');
    }
    
    ?>
</body>
</html>