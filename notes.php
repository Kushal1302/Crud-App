<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Notes - WebApp</title>
</head>
<body>
    <?php
    require 'nav.php';
    require 'database.php';
    // echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    //             <strong>Success</strong> Login Successfully.
    //             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    //           </div>';
      $updateUser = "";
      if(isset($_GET['updateUser'])){
       $updateUser = $_GET['updateUser'];
    //    echo gettype($updateUser);
      }
    if($_SERVER['REQUEST_METHOD']=='POST'){
        
       
        $title = $_POST['title'];
        $description = $_POST['description'];
        $sql = "UPDATE `crud` SET `title`='$title' ,`description`='$description' WHERE `username` = '$updateUser'";
        $result = mysqli_query($conn , $sql);
        if($result)
        {
            header("Location: notes.php?updateUser=$username");
        }
    
    }

    
    ?>
<div class="container mt-3">
     <form action="notes.php" method="post">
        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label"><strong>Add Note Title</strong></label>
        <textarea name="title" id="title" class="form-control" cols="30" rows="1" placeholder="Title"></textarea>
        </div>
        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label"><strong>Note Description</strong></label>
        <textarea name="description" id="description" class="form-control" cols="30" rows="10" placeholder="Note Description"></textarea>
        </div>
        <div class="mt-2">
        <button  class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>
 </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>