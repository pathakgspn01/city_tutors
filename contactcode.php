<?php   
$cname=$_POST['cname'];
$cemail=$_POST['cemail'];
$cmobile=$_POST['cmobile'];
$cmsg=$_POST['cmsg'];

include('connection.php');
$sql="insert into tbl_contact(cname,cemail,cmobile,cmsg) values('".$cname."','".$cemail."','".$cmobile."','".$cmsg."')";
//echo $sql;

mysqli_query($con,$sql);
$msg="Thank u for visite my website by Govind Pathak";
header('location:https://www.smsgatewayhub.com/api/mt/SendSMS?APIKey=7IxrwGrWvkCOa4ZVVM05ng&senderid=SMSTST&channel=2&DCS=0&flashsms=0&number='.$cmobile.'&text='.$cmsg.'&route=1');         

?>