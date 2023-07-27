<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "hotel_management";

// create a connection 
$conn = mysqli_connect($servername, $username, $password, $database);
// die if connection was not successful
if (!$conn){
    header("Location: ../errors/db.php");
    die();
}
// else{
//  echo "Connection was Successful<br>";
// }
?>