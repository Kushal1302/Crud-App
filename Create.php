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
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        require 'database.php';
       

        if($password == $cpassword)
        {
                    $sql = "INSERT INTO `crud` (`username`, `password`, `dt`) VALUES ( '$username', '$password', current_timestamp())";
                $result = mysqli_query($conn , $sql);
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success</strong> Account Created Successfully.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
                    header("Location: Login.php");

        }
        else{
                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> Please Enter Same Password below.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
        }
    
    }
    
    
    
    ?>
<div class="container my-4">
    <h1 class="fs-4">Create Your Account</h1>
  <form action="index.php" method="post">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Create Username</label>
            <input type="text" name="username" class="form-control" col="5" id="username" >
            </div>
            <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Create Password</label>
            <input type="password" name="password" class="form-control" id="password" >
            </div>
            <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Create Password</label>
            <input type="password" name="cpassword" class="form-control" id="cpassword">
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Create Account</button>
            <button class="btn btn-success" type="reset">Reset</button>
        </div>


  </form>
</div>
</body>
</html>