<?php
$t = date("H");
if($t >"20") 
{
echo "have a good day";
}
else if($t < "10"  && $t < "20")
{
echo "have a good noon";
}
else
{
echo "have a good evening";
}
?>