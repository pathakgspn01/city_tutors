<html>
<head>
<style>
.mainnotification
{
	color:#f15337;
	font-size:20px;
	background:#f3eef2;
	padding:5px;
	min-height:30px;
}
</style>
</head>
<body>
<div class="col-sm-12 " >
<div class="row">
<div class="mainnotification">
<marquee direction="right">

<?php
include('connection.php');
$res="select * from tbl_notification";
$result=mysqli_query($con,$res);
while($row=mysqli_fetch_array($result))
{
	echo $row['ndescription'];		
}
?>

</marquee>
</div>
</div>
</div>
</body>
</html>