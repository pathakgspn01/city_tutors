<?php
error_reporting(0);
$msg=$_REQUEST['msg'];
if($msg==1)
{
 echo "<script>alert('Your data has been save successfully');window.location.href='maincontactus.php';</script>";
}
?>

<html>
<head>

<style>
.userimg
{
background-attachment:justify;
min-height:500px;
background-image:url(images/dwn6.jpeg);
background-repeat:no-repeat;
background-size:100% 100%;	
}
.userimg1
{
	min-height:300px;
	background:rgba(0,0,0,.1);
	color:white;
	padding:2% 0%;
	font-size:20px;
}
.contactusname
{
min-height:70px;

font-size:30px;
text-align:center;
color:red;	
}
.contform
{
 padding:2% 3%;	
 min-height:350px;
}
.moreinfoform
{
	color:red;
	background:#f3eef2;
	min-height:350px;
	padding:2% 2%;
	margin:0% 0%;
	border-radius:2%;
}
.location
{
	border-radius:1%;
	padding-bottom:5%;
}
</style>
<script>
function formbtn()
{
	alert("thank u");
}
</script>
</head>
<body>
<div class="col-sm-12 contactus">
<div class="row">
<div class="col-sm-12 userimg">
<div class="row">
<div class="col-sm-12 userimg1">
<center>
<div class="col-sm-12 "><b style="color:red;"><span class="fa fa-link contactusname"style="color:white;">Enquiry Form</span></b></div>
</center>
<div class="col-sm-12 contform">
<div class="col-sm-7">
<div class="row">
<!--Google map-->
<div id="map-container-google-1" class="z-depth-1-half map-container " >
<center><h2 style="color:#f15337;">Our <b>Direction</b></h2></center>
  <iframe class="location"src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
    style="border:0;height:380px;width:100%;" allowfullscreen></iframe>
</div>
<!--Google Maps-->
</div>
</div>
<div class="col-sm-1"></div>
<div class="col-sm-4 moreinfoform">
<center><h2 style="color:#f15337;">GET MORE INFO </h2></center>
<form action="contactcode.php" method="post"style="color:blue;">
<input class="form-control"type="text" name="cname" placeholder="Enter Name"/><br>
<input class="form-control"type="email" name="cemail"placeholder="Enter Email" /><br>
<input class="form-control"type="number" name="cmobile"placeholder="Enter Mobile Number:"/><br>
<input class="form-control"type="textarea" name="cmsg" placeholder="Enter Your Message"/><br>
<input style="background:#9eda46;font-size:20px;padding:0px;"class="form-control"type="submit"/>
</form>
</div>



</div>


</div>
</div>
</div>
</div>
</div>
</body>
</html>