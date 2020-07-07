<html>
<head>
<style>
.searchm
{
	min-height:100px;
	background:#f3eef2;
	
	
}
mimages
{
	min-height:100px;
	background:url(images/govind.jpg);
	background-size:99% 99%;
	background-repeat:no-repeat;
	
	
}
.mabout
{
	min-height:100px;
	background:#f3eef2;
	padding:5px;
}
.pad
{
	padding:5px;
}
.findmore
{
	min-height:100px;
	background:#9eda46;
}
</style>
</head>
<body>
<div class="col-sm-12 findmore">
<center><div style="font-size:27px;color:white;padding:20px;">Do you need help in finding the best teacher matching your requirements?</div>
<a href="maingenerateleads.php"><button class="btn btn-success"style="font-size:23px;margin-bottom:20px;">POST YOUR REQUIREMENTS NOW</button></a></center>
</div>
<?php
include('connection.php');
$res="select * from city_tutor";
$result=mysqli_query($con,$res);
while($row=mysqli_fetch_array($result))
{
?>
<div class="col-sm-12 searchm">
<div class="row">
<div class="col-sm-2"style="padding:5px;">
<div class="mimages">
<img src="upload/<?php echo $row['image'] ?>" height="150px"width="200px"/>
</div>
</div>
<div class="col-sm-10 mabout">
<div style="margin:5px;"><?php echo $row['rfname'],$row['rlname'] ?> <center style="display:inline;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span class="fa fa-stack fa-lg" style="font-size:10px;color:green;">
    <i class="fa fa-certificate fa-stack-2x"></i>
    <i class="fa fa-check fa-stack-1x fa-inverse"></i>
</span>
</center><a href="mainsearchmaster_message_form.php"><button class="btn btn-success"style="float:right;margin-right:20px;">MESSAGE</button></a> </div>
<div class="col-sm-12 pad"><span class="fa fa-map-marker"> &nbsp;<?php echo $row['rczone'],$row['rcity'] ?></span>  </div>
<div class="col-sm-12 pad"><span class="fa fa-phone">&nbsp;<?php echo $row['rmobile'] ?></span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-envelope">&nbsp; <?php echo $row['remail'] ?></span> </div>
<div class="col-sm-12 pad"><span class="fa fa-institution">&nbsp;Class: <?php echo $row['rtlevel'] ?></span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-briefcase"> <?php echo $row['reyear'] ?></span> </div>
</div>
</div>
</div>
<?php
}
?>
</body>
</html>