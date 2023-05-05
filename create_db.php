<?php
$servename="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servename,$username,$password);
if (!$conn) {
    die("sorry we failed to connect:".mysqli_connect_error());
}
else{
    echo "connection successful:";
}
$sql= "CREATE DATABASE saifdb";
$result= mysqli_query($conn,$sql);
if ($result) {
    echo "database is created";
}
else{
    echo "database is not created :".mysqli_error($conn);
}
?>