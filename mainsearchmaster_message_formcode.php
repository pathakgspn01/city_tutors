<?php   
$smname=$_POST['smname'];
$smemail=$_POST['smemail'];
$smmobile=$_POST['smmobile'];
$smmsg=$_POST['smmsg'];
include('connection.php');
$sql="insert into tbl_master_message(smname,smemail,smmobile,smmsg) values('".$smname."','".$smemail."','".$smmobile."','".$smmsg."')";
//echo $sql;

mysqli_query($con,$sql);
header('location:mainsearchmaster_message_form.php?msg=1');

?>