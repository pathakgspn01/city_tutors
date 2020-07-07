<html>
<head>
<style>
.mainsignuser
{
	min-height:45%;
	background:white;
}
.usersignin
{
	margin:30%;
	margin-top:1%;
	margin-bottom:10%;
	background:#ef6191;
	padding:2% 5%;
	min-height:7%;
	border-radius:2%;
}
#submit
{
background:#9eda46;
max-width:100px;
}
a{
	text-decoration:none;
	color:white;
}

.log1
{
	color:white;
	min-height:5%;	
	margin:2%;
	font-size:30px;
}
.log2
{
	color:#3a77be;
	min-height:5%;	
	margin:2%;
	font-size:30px;
	
}
label
{
	font-size:20px;
}
#nw
{
	color:white;
	background:pink;
	max-width:100px;	
}

</style>
<body>
<div class="col-sm-12 mainsignuser">
<div class="usersignin">
<form>
<center><button style="color:#9eda46;background:#ef6191;font-size:30px;padding:0px;min-height:45px;border:0px;" class="form-control login">Log-in to your account</button></center>
<center>
<div class="col-sm-12 ">
<span class="fa fa-google log1"></span>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
 <span class="fa fa-facebook log2"> </span>
</div>
</center>
<br>
<div class="col-sm-12">
<input class="form-control"placeholder="Enter username" type="text"name="username"/>
<input class="form-control" placeholder="Enter password" type="password"name="password"/><br>
</div>
<center><input class="form-control" id="submit" type="submit"/></center>
<a href="">forget password</a><br>

<div style="color:white;">New to us?<a href="mainusersignup.php"style="color:#9eda46;">Sign Up</a></div>

</form>

</div>
</div>
</body>
</html>