<?php
error_reporting(0);
$msg=$_REQUEST['msg'];
if($msg==1)
{
 echo "<script>alert('Your data has been save successfully');window.location.href='mainteachersignup.php';</script>";
}
?>
<html>
<head>
<style>
.signup
{
	min-height:200px;
	background:#f3eef2;
	color:black;
    border:1px solid #9eda46;
    border-radius:20px;	
}
.signupuser
{
background:white;
min-height:200px;
padding:5% 4%;
}

#flname
{
width:49.2%;
display:inline;	
}
.form-control1
{
	width:100%;
}
#signupuserbtn
{
	width:50%;
	background:#f15337;
}
</style>
</head>
<body>

<div class="col-sm-12 signupuser">
<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-6 signup"><br>
<center><div style="color:white;background:#f15337;font-size:25px;width:99%;" >Register</div>
<div style="font-size:17px;background:#f15337;width:99%;">Create your account. It's free and only takes a minute. </div>

<form action="tregistationaction.php" method="post" enctype="multipart/form-data">
<input type="text" class="form-control "name="rfname" placeholder="Enter first name."id="flname"/>

<input type="text" class="form-control "name="rlname" placeholder="Enter last name."id="flname"/>

<input type="email" class="form-control form-control1"name="remail" placeholder="Enter Email address"/>

<input type="number" class="form-control form-control1"name="rmobile" placeholder="Enter Mobile Number"/>

<select class="form-control"name="rage">
<option value="-Select age-">-Select age-</option>
<option>Under 20</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
<option>32</option>
<option>33</option>
<option>34</option>
<option>35</option>
<option>36</option>
<option>37</option>
<option>38</option>
<option>39</option>
<option>40</option>
<option>41</option>
<option>42</option>
<option>43</option>
</select>

<select class="form-control"name="rtlevel">
<option>-Select Tuition Level-</option>
<option>10<sup>th</sup></option>
<option>12</option>
<option>Gradution</option>
<option>Post Gradution</option>
<option>P.H.D.</option>
<option>Other </option>
</select>

<select class="form-control"name="remedium">
<option>-select Education Medium-</option>
<option>Offline Class</option>
<option>Online Class</option>
</select>
<select class="form-control"name="rcity">
<option>-Select City-</option>
<option>kanpur</option>
<option>Rampur</option>
<option>Gonda</option>
<option>Shahjahanpur</option>
<option>Lucknow</option>
<option>Mer </option>
<option>Mer </option>
<option>Mer </option>
<option>Mer </option>
<option>Mer </option>
</select>

<select class="form-control"name="rczone">
<option>-Select City Zone/Location-</option>
<option>Khuram Nagar</option>
<option>Tedhi Puliya</option>
<option>Ameenabad</option>
</select>

<select class="form-control"name="reyear">
<option>-select Experience Year-</option>
<option>0</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>Above</option>
</select>

<select class="form-control"name="rslanguage">
<option>-Select Speak Language-</option>
<option>Hindi</option>
<option>English</option>
<option>Panjabi</option>
</select>

<input type="textarea" class="form-control form-control1" name="rcstatus"placeholder="Current Status"/>

<input type="textarea" class="form-control form-control1" name="rqualification"placeholder="Enter Qualification"/>

<input type="number" class="form-control form-control1" name="rtsession"placeholder="Enter Timing Session"/>

<select class="form-control"name="rmtution">
<option>-Select Mode of Tuition-</option>
<option>Hindi</option>
<option>English</option>
<option>Panjabi</option>
</select>
<input type="password"required class="form-control form-control1" name="rlogin"placeholder="Create Password"/>
<button type="button" id="flname"style="color:black;"class="form-control">Upload Your Photo</button>
<input type="file" name="file" class="form-control"id="flname" placeholder=" PRofile picture UPLOAD"/>

<div style="font-size:15px;"><input type="checkbox" required />I accept Terms of Use & Privacy Policy.</div>
<div style="font-size:15px;"><input type="checkbox"required />Remember me</div>
<button class="btn btn-success" id="signupuserbtn">GET FREE DEMO CLASS</button>

</form>
</center>
</div>
<div class="col-sm-3"></div>
</div>
</div>
</body>
</html>