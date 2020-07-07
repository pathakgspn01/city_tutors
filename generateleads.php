<?php
error_reporting(0);
$msg=$_REQUEST['msg'];
if($msg==1)
{
 echo "<script>alert('Your data has been save successfully');window.location.href='maingenerateleads.php';</script>";
}
?>
<html>
<head>
<style>
.searchmaster
{
	min-height:1px;
	background:white;
	padding:40px;
}

.smaster
{
	min-height:200px;
	background:white;
}
.searchm
{
	min-height:200px;
	background:#eceff1;
	border:1px solid #9eda46;
	border-radius:10px;
}
.form-control1{	
}
.searchheading
{
	padding:30px;
	text-align:center;
	font-size:30px;
	color:#f15337;
}
</style>
</head>
<body>

<div class="col-sm-12 searchmaster">
<div class="row">
<div class="col-sm-2 smaster"></div>
<div class="col-sm-8 searchm">
<form action="generatelcode.php" method="post">
<div class="searchheading">What do you like to learn? </div>
<input type="text"class="form-control formcontrol1"name="glname"placeholder="Enter your name..."/>
<input type="email"class="form-control"name="glemail"placeholder="Enter your Email addres..."/>
<input type="number"class="form-control"name="glmobile"placeholder="Enter your Mobile number..."/>
<select class="form-control"name="glclass">
<option>-select class-</option>
<option value="10">10 </option>
<option value="11">11</option>
<option value="12">12 </option>
</select>
<select class="form-control"name="gleducationm">
<option>-Select Education medium-</option>
<option value="hindi">hindi</option>
<option value="english">english</option>

</select>
<select class="form-control"name="glcity">
<option>-Select City-</option>
<option value="kanpur">kanpur</option>
<option value="rampur">Rampur</option>
<option value="gonda">Gonda</option>
<option value="shahjahanpur">Shahjahanpur</option>
<option value="lucknow">Lucknow</option>
</select>
<select class="form-control"name="glarea">
<option>-select area-</option>
<option value="ghar chauba">ghar chauba  </option>
<option value="tilhar">tilhar </option>
<option value="rampuriya">rampurya </option>
</select>

<center><button class="btn btn-success">&nbsp; &nbsp; Send &nbsp; &nbsp;</button></center>
</form>
</div>
<div class="col-sm-2 smaster"></div>
</div>
</div>
</body>
</html>


