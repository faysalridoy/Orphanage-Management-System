
<?php


$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
 
// Check connection
if(!$conn){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt create database query execution
$sql = "CREATE DATABASE orp2";
if(mysqli_query($conn, $sql)){
    echo "Database created successfully";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
?>