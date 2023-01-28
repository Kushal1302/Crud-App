<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Developer - For Editing Or Deleting</title>
</head>
<body>
    <?php
    require 'nav.php';
    require 'database.php';
    ?>

    
    <div class="container">
            <table class="table">
        <thead>
            <tr>
                <th scope="col">Sr No</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">
                    <?php
                    $sql = "SELECT * FROM `crud`";
                    $result = mysqli_query($conn , $sql);
                   $row = mysqli_fetch_assoc($result);
                   $sr =1;
                   while($row!=NULL){
                    echo "$sr<br>";
                    $sr++;
                    $row = mysqli_fetch_assoc($result);


                   }
                    ?>
                </th>
                <td>
                <?php
                $sql = "SELECT * FROM `crud`";
                $result = mysqli_query($conn , $sql);
                $row = mysqli_fetch_assoc($result);
                
                while($row!=NULL){
                 echo $row['username'];
                 echo "<br>";
                 
                 $row = mysqli_fetch_assoc($result);
                }
                ?>
                </td>
                <td>
                <?php
                $sql = "SELECT * FROM `crud`";
                $result = mysqli_query($conn , $sql);
                $row = mysqli_fetch_assoc($result);
                
                while($row!=NULL){
                 echo $row['password'];
                 echo "<br>";
                 
                 $row = mysqli_fetch_assoc($result);
                }
                ?>
                </td>
                <td>
                <?php
                $sql = "SELECT * FROM `crud`";
                $result = mysqli_query($conn , $sql);
                $row = mysqli_fetch_assoc($result);
                
                while($row!=NULL){
                 echo $row['title'];
                 echo "<br>";
                 
                 $row = mysqli_fetch_assoc($result);
                }
                ?>
                </td>
                <td>
                <?php
                $sql = "SELECT * FROM `crud`";
                $result = mysqli_query($conn , $sql);
                $row = mysqli_fetch_assoc($result);
                
                while($row!=NULL){
                 echo $row['description'];
                 echo "<br>";
                 
                 $row = mysqli_fetch_assoc($result);
                }
                ?>
                </td>
                <td>
                <?php
                $sql = "SELECT * FROM `crud`";
                $result = mysqli_query($conn , $sql);
                $row = mysqli_fetch_assoc($result);
                
                while($row!=NULL){
                 echo'<a href="edit.php?updateSr='.$row['sr'].'">Edit</a> <a href="delete.php?deleteSr='.$row['sr'].'">Delete</a>';
                 echo '<br>';
                 
                 $row = mysqli_fetch_assoc($result);
                }
                ?>
                </td>
            </tr>
        </tbody>
        </table>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>