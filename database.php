<?php

$con=mysql_connect("localhost","root",'');
mysql_select_db('bhagat');
$userName=$_POST[userName];
$userEmail=$_POST['userEmail'];
$userMsg=$_POST['userMsg'];
$comment=$_POST['comment'];
$conn="INSERT INTO users(name,email,subject,comment)
VALUES ('$userName','$$userEmail','$userMsg',$comment)";
$s=mysql_query($conn);
if($conn)
{
echo  "record submit sucessfully";
}
else
echo"hello ";

mysql_close($con);



?>