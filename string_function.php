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
$name="saif is a good boy";
echo "<h1>$name</h1>";
echo "<br>";
echo "<h3>the length of my string is</h3>".strlen($name)."<br>";
echo "<h3>the no of word in name variable</h3>".str_word_count($name);
echo "<h3>the reverse of given word</h3>". strrev($name)."<br>";
echo strpos($name,"o");
?>
</body>
</html>