<?php
$servername='localhost';
$username="root";
$password="";
$database="lms";
$conn=mysqli_connect($servername,$username,$password,$database);
if (!$conn) {
    die("connection was not establised");
}
else{
    echo "connectio eastablished<br>";
}
$sql="SELECT * FROM sign_up";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
echo "$num ";
echo "Records found  in database <br>";
/*if ($num>0) {
    $row=mysqli_fetch_assoc($result);
    echo var_dump($row);
}*/
while ($row=mysqli_fetch_assoc($result)) {
    echo var_dump($row);
    echo "<br>";
}
?>