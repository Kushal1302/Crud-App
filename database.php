<?php
$server = "localhost";
$name = "root";
$pass = "";
$database = "crud";

// INSERT INTO `crud` (`sr`, `username`, `password`, `dt`) VALUES ('1', 'kushal', 'kushal', current_timestamp());

$conn = mysqli_connect($server , $name , $pass , $database);


?>