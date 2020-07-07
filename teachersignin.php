<html>
<head>
<style>
.mainsignuser
{
	min-height:100px;;
	background:white;
	padding:40px;
}
.usersignin
{
	margin:20%;
	margin-top:1%;
	margin-bottom:10%;
	background:#f3eef2;
	padding:2% 5%;
	min-height:7%;
	border:1px solid #9eda46;
	border-radius:2%;
}
#submit
{
background:#f15337;
color:white;
font-size:15px;
height:35px;
max-width:100px;
}
a{
	text-decoration:none;
	color:black;
}
#nw
{
	color:white;
	background:pink;
	max-width:200px;	
}
.form-control1
{
	width:100%;
}
</style>
<body>
<div class="col-sm-12 mainsignuser">
<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-6">
<div class="usersignin">
<form  action="teachersignincode.php" method="post" >
<center><button style="color:#f15337;background:#f3eef2;font-size:20px;padding:0px;min-height:45px;border:0px;box-shadow:none;width:100%;" class="form-control login">Log-in <i class="fa fa-lock"></i></button></center>
<br><br>
<div class="">
<div class="input-group input-group-lg">
<span class="input-group-addon" id="sizeing-addon1">
<i class="fa fa-user"></i>
</span>
<input type="text" name="remail"class="form-control form-control1" placeholder="Username" aria-describedby="sizing-addon1">
</div>
<div class="input-group input-group-lg">
<span class="input-group-addon" id="sizeing-addon1">
<i class="fa fa-lock"></i>
</span>
<input type="password" name="rlogin"class="form-control form-control1" placeholder="Password" aria-describedby="sizing-addon1">
</div>
</div><br>
<center><input class="form-control" id="submit" type="submit"/></center><br>
<a href="mainforgetpassword.php">forget password</a>
New to us?<a href="mainteachersignup.php"style="color:#f15337;">Sign Up</a>
</form>
</div>
</div>
<div class="col-sm-3"></div>
</div>
</div>
</body>
</html>