<html>
<head>
<title>Log In</title>
<style type="text/css">
<!--
table{
	background-color:#B345B6;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 36px;
	color:#FFFF00;
	margin-top:250px;
}
#font{
	color:#99FF00;
	font-family:Arial, Helvetica, sans-serif;
	font-size:24px;
}
.navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  cursor: pointer;
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn, .dropbtn:focus {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.show {
  display: block;
}
input[type="submit"]
{
	background-color:#33CC99;
	font-family: Arial black, Helvetica, sans-serif;
	height:40px;
	color:#CC00FF;
	border-radius:20px;
	border-width:0px;
	width:100px;
	margin-bottom:10px;
}
-->
</style>
</head>
<form method="post">
<body>

<p>&nbsp;</p>
<div align="center" ><h1>Smt.K.B.Parekh College of Computer Science Mahuva</h1></div>
<div align="center"><h2>BCA Sem-4 Assignment-1</h2></div>
<div class="navbar">
  <a href="#home">Home</a>
  <a href="#news">About us</a>
  <a href="#news">Contact us</a>
  <a href="login.php">Login</a>
  <a href="signup.php">Sign Up</a>
  
</div>

<table width="50%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2"><div align="center">Log In </div></td>
  </tr>
  
  <tr>
    <td id="font"><center>UserName</center></td>
    <td><center><input type="text" name="user" /></center></td>
  </tr>
  
  <tr>
    <td id="font"><center>Password</center></td>
    <td><center><input type="password" name="password" /></center></td>
  </tr>
  
  <tr>
    <td colspan="2">
		<div align="center">
			<input type="submit" name="submit" value="Log In"/>
		</div>
	</td>
  </tr>
  
</table>
</body>
</form>
</html>

<?php
	$username=$_POST['username'];
	$password=$_POST['password'];
	setcookie($username,$password, time() + (100), "/");
	if(isset($_POST['submit']))
	{
		echo $username;
		echo "<br>";
		echo $password;
		if($username=="admin" && $password=="123")
		{
			session_start();				
			
			$_SESSION['username']=$_POST['username'];
			$_SESSION['password']=$_POST['password'];
				
			header("Location:assignment1.php");
			
       	    exit();
		}
	}
?>