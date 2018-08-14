<?php
//connect to mySQL
$con = mysqli_connect('localhost', 'root', '', 'sh');
//test connection
if (mysqli_connect_errno())
{
echo "faild to connect to mySQL" .mysql_connect_error();
}
?>
