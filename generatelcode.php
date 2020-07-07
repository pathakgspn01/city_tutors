<?php
$glname=$_POST['glname'];
$glemail=$_POST['glemail'];
$glmobile=$_POST['glmobile'];
$glclass=$_POST['glclass'];
$gleducationm=$_POST['gleducationm'];
$glcity=$_POST['glcity'];
$glarea=$_POST['glarea'];
include('connection.php');
$sql="insert into tbl_generateleads(glname,glemail,glmobile,glclass,gleducationm,glcity,glarea) values ('".$glname."','".$glemail."','".$glmobile."','".$glclass."','".$gleducationm."','".$glcity."','".$glarea."')";
mysqli_query($con,$sql);
header('location:maingenerateleads.php?msg=1');
?>