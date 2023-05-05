<?php
$severname="localhost";
$username="root";
$password="";
$conn = mysqli_connect($severname,$username,$password);
if (!$conn) {
    die("sorry we failed to connect:".mysqli_connect_error());
}
echo "connection was successful";
?>