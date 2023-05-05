<?php
$servername="localhost";
$username="root";
$password="";
$database="saifdb";
$conn=mysqli_connect($servername,$username,$password,$database);
if (!$conn) {
    die("connection not established".mysqli_connect_error());
}
else {
    echo "connection established <br>";
}
$sql="INSERT INTO `trip` (`si`, `name`, `dest`, `cost`) VALUES ('', 'chotu', 'russia', '6000')";
$result=mysqli_query($conn,$sql);
if ($result) {
    echo "data inserted successful";
}
else {
    echo "data not inserted".mysqli_error($conn);
}
?>