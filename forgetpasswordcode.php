<?php   
$remail=$_POST['remail'];
$rlogin=$_POST['rlogin'];

include('connection.php');

$query="select * from city_tutor where remail='".$reamil."' and rlogin='".$rlogin."'";
$res=mysqli_query($con,$query);
if()
{
	header('location:index.php');
}
else
{
	header('location:dashboard.php');
}
echo $sql;
?> 