<!DOCTYPE html>
<html>
<body>
<?php
$x=10.13111;
echo "<br>";
var_dump(is_int($x));
$x=10;
echo "<br>";
var_dump(is_int($x));
$x=10.13111;
echo "<br>";
var_dump(is_numeric($x));
$x="10.13111";
echo "<br>";
var_dump(is_int($x));
echo "<br>";
$i=acos(8);
var_dump(is_numeric($i));
echo "<br>";
$a=2;
$b=3;
$d=7;
$e=4;
$c=$a+$b;
echo $c;
echo "<br>";
$f=$d-$c;
echo $f;
echo "<br>";
$g=$e*$c;
echo $g;
echo "<br>";
$s=$e**$c;
echo $s;
echo "<br>";
$q=$e%$c;
echo $q;
echo "<br>";

echo "<br>";
$m=$a+=$b;
echo $m;
echo "<br>";
$n=$a-=$b;
echo $n;
echo "<br>";
$m=$a*=$b;
echo $m;
echo "<br>";
$m=$a%=$b;
echo $m;
echo "<br>";
$m=$a<=$b;
echo $m;
echo "<br>";
$m=$a>=$b;
echo $m;
echo "<br>";
$m=$a==$b;
echo $m;
?>
</body>
</html>