<?php
require'connect.php';


$name=$_POST['name'];
$surname=$_POST['surname'];
$username=$_POST['username'];
$password=$_POST['password'];

$db=mysqli_query($con,"insert into student_info values ('NULL','$name','$surname','$username','$password')");

if($db)
{
	echo '<body style="background-color:#A02CEE;
box-sizing: border-box;"><center><h1 style="font-color:red; margin-top:15%;font size="10px"">'.'Congratulations..!!! You Can now enjoy StreamX '.'</h1></center></body>';
}
else
	echo 'query didnt execute';
?>