
<?php include('link.php');?>
<?php include('mainheader.php');?>
<?php include('header1.php');?>
<?php
error_reporting(0);
$msg=$_REQUEST['msg'];
if($msg==1)
{
 echo "<script>alert('Your data has been save successfully');window.location.href='mainsearchmaster_message_form.php';</script>";
}
?>
<html>
<head>
<style>
.master_message_heading
{
	font-size:25px;
	background:pink;
	padding:20px;
}
.master_message_form
{
	padding:20px;
	min-height:150px;
	background:skyblue;
}
</style>
<body>
<div class="col-sm-12 master_message_heading"><center>Message to teacher</center></div>
<div class="col-sm-12">
<div class="col-sm-4"></div>
<div class="col-sm-4 master_message_form">
<form action="mainsearchmaster_message_formcode.php" method="post">
<label> Name:</label><input name="smname"class="form-control" placeholder="Enter Your name.."/>
<label> Email:</label><input name="smemail" class="form-control" placeholder="Enter email number.."/>
<label> Number:</label><input name="smmobile"class="form-control"placeholder="Enter mobile number.."/>
<label> Message:</label><textarea name="smmsg"class="form-control"placeholder="Enter yor Message"></textarea>
<br>
<center><button class="btn btn-success">Send</button></center>
</form>
</div>

<div class="col-sm-4"></div>
</div>


</body>

</html>
<?php include('ufooter.php');?>
<?php include('bfooter.php');?>