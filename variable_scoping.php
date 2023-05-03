<?php
$x=5; //global variable , a variable decleered out side the function has gobal scop and can only be accesed out the function.
function myfun()
{
    $x=5;   //local varible  , a variable declecre within the function has local scop can only accesed within the function.
    echo "the $x is the globle varible in this program";
}
myfun();
echo "the $x is global varible ";
$a=5;
$b=10;
function mytest()
{
    global $a,$b,$c;
    $c=$a+$b;
}
mytest();
echo "$c<br>";
function mytest2()
{
    static $x=0;
    echo "$x<br>";
    $x++;
}
mytest2();
mytest2();
mytest2();
echo "$x";
?>
<!DOCTYPE html>
<html>
<body>

<?php
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

echo "<h2>".$txt1."</h2>";
echo "Study PHP at ". $txt2 ."<br>";
echo $x + $y;
?>

</body>
</html>
