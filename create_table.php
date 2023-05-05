<?php
$servername="localhost";
$username="root";
$password="";
$database="saifdb";
$conn=mysqli_connect($servername,$username,$password,$database);
if (!$conn) {
    die("connection was not  established:".mysqli_connect_error());

}
else{
    echo "connection was successful<br>";
}
$sql="CREATE TABLE `phptrip` (`si` INT(8) NOT NULL AUTO_INCREMENT , `name` VARCHAR(11) NOT NULL , `dest`
 VARCHAR(11) NOT NULL , `cost` INT NOT NULL , PRIMARY KEY (`si`))";
 $result=mysqli_query($conn,$sql);
 if ($result) {
    echo "table created successful";
 }
 else {
    echo "tabele not created".mysqli_error($conn);
 }/*
 $sql1="DROP TABLE phptrip";
 $result=mysqli_query($conn,$sql1);
 if ($result) {
    echo "table drop successful";
 }
 else {
    echo "table was not drop".mysqli_error($conn);
 }*/

?>