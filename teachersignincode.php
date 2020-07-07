<?php   
session_start();
$remail=$_POST['remail'];
$rlogin=$_POST['rlogin'];
include('connection.php');

$query="select * from city_tutor where remail='".$remail."' and rlogin='".$rlogin."'";
$res=mysqli_query($con,$query);
//echo $query;
if($row=mysqli_fetch_array($res))
{
	$_SESSION['master']=$remail;
	header('location:master/master_index.php');
	
}
else
{
	header('location:mainteachersignin.php');
}

?>