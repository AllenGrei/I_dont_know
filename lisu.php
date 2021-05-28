<html>
<title> Log-in/Sign-Up</title>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="stylesheet" href="css.css">
</head>
<body>
<style>
	body{ 
      background-image: url('bgx.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
   }
	label.logo{
  color: white;
  font-size: 35px;
  line-height: 50px;
  padding: 0 30px;
  font-weight: bold;
	}
.login-form{
	text-align: center;
	padding: 15px;
	margin: 10px 0 52px 0;
}
.login-form input[type=text], .login-form input[type=password]{
	width: 50%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: 3px solid black;
  background: #f1f1f1;
}
.login-form .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 10%;
  margin-bottom:12px;
 
}
.login-form .btn:hover{
background-color:skyblue;
}
.login-form .sup {
  background-color: orange;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 10%;
  margin-bottom:12px;
  
}
.login-form .sup:hover{
background-color:skyblue;
}
.title{
	font-size: 30px;
	text-shadow: 2px 2px white;
}
label.col{
	color: #111e4a;
}
</style>
<div class="nav"> 	
	<a href="home.html"> Home </a>
	<a href="aboutus.php"> About Us </a>
	<a class="active" href="#"><b> Log-in/Sign-up </a>
	<label class="logo"> SE System </label>
	</b>
</div>

 <div class="login-form">
 	<div class="title"> Log-in Form </div>
 	<label for="email" class="col"><b>Email</b></label>
 	<input type="text" placeholder="Enter Email" name="email" required>
 	<br>
 	<label for="psw" class="col"><b>Password</b></label>
 	<input type="password" placeholder="Enter Password" name="psw" required>
 	<br>
 	<a href="clothinghome.php"> <button type="submit" class="btn"> Log-In </button> </a>
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 	<a href="signup.php"> <button type="submit" class="sup"> Sign-up </button> </a>
 	
 </div>
	
	</body>

</html>