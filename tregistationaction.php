<?php
$rfname=$_POST['rfname'];
$rlname=$_POST['rlname'];
$remail=$_POST['remail'];
$rmobile=$_POST['rmobile'];
$rage=$_POST['rage'];
$rtlevel=$_POST['rtlevel'];
$remedium=$_POST['remedium'];
$rcity=$_POST['rcity'];
$rczone=$_POST['rczone'];
$reyear=$_POST['reyear'];
$rslanguage=$_POST['rslanguage'];
$rcstatus=$_POST['rcstatus'];
$rqualification=$_POST['rqualification'];
$rtsession=$_POST['rtsession'];
$rmtution=$_POST['rmtution'];
$rlogin=$_POST['rlogin'];
$image=$_FILES['file']['name'];
$size=$_FILES['file']['size'];
$type=$_FILES['file']['type'];
$tmpname=$_FILES['file']['tmp_name'];
$location="upload/";
move_uploaded_file($tmpname,$location.$image);
//echo $rfname,$rlname,$remail,$rmobile,$rage,$rtlevel,$remedium,$rcity,$rczone,$reyear,$rslanguage,$rcstatus,$rqualification,$rtsession,$rmtution,$image;
include('connection.php');
$sql="insert into city_tutor(rfname,rlname,remail,rmobile,rage,rtlevel,remedium,rcity,rczone,reyear,rslanguage,rcstatus,rqualification,rtsession,rmtution,rlogin,image) values('".$rfname."','".$rlname."','".$remail."','".$rmobile."','".$rage."','".$rtlevel."','".$remedium."','".$rcity."','".$rczone."','".$reyear."','".$rslanguage."','".$rcstatus."','".$rqualification."','".$rtsession."','".$rmtution."','".$rlogin."','".$image."')";
//echo $sql
mysqli_query($con,$sql);
header('location:mainteachersignup.php?msg=1'); 
$_SESSION['master']=$remail;
?>