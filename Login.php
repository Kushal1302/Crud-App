<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php
    require 'nav.php';
//     echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
//     <strong>Success</strong> Account Created Successfully.
//     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
//   </div>';

    require 'database.php';
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM `crud` where `username`='$username' and `password`='$password'";
        $result = mysqli_query($conn , $sql);
        $row = mysqli_fetch_assoc($result);
        while($row!=NULL){

            if($row['username']==$username && $row['password']==$password){
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success</strong> Login Successfully.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
             
              header("Location: notes.php?updateUser=$username");
              
            }
            else{
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Error!</strong> Wrong Password.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
                // header('location: Create.php');
            }
            $row = mysqli_fetch_assoc($result);
        }
    }
    
        

    
    
    ?>
    <div class="container my-5">
        <h1 class="fs-3">Now You Can Login To Our Notes WebApp</h1>
        <form action="Login.php" method="post">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Enter Username</label>
                    <input type="text" name="username" class="form-control" col="5" id="username" >
                    </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Enter Password</label>
                    <input type="password" name="password" class="form-control" id="password" >
                </div>
            
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Login</button>
                    <button class="btn btn-success" type="reset">Reset</button>
                </div>
    
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>