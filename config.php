<?php
$con = mysqli_connect("localhost","root","","cms");
if (mysqli_connect_errno())
{
echo "failed to connect to MYSQL" . mysqli_connect_error();
}
?>