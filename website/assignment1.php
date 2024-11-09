<html>
<head>
	<title>Welcome</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
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
/*input[type="button"]
{
	background-color:#33CC99;
	margin-left:59%;
	font-family: Arial black, Helvetica, sans-serif;
	height:48px;
	color:#CC00FF;
}*/
</style>
</head>

<body>
<form method="post">
<p>&nbsp;</p>
<div align="center" ><h1>Smt.K.B.Parekh College of Computer Science Mahuva</h1></div>
<div align="center">
	<h2>BCA Sem-4 Assignment-1</h2>
</div>
<div class="navbar">
  <a href="#home">Home</a>
  <a href="#aboutus">About us</a>
  <div class="dropdown">
  	<button class="dropbtn" onClick="myFunction()">Assignment
    <i class="fa fa-caret-down"></i>
  	</button>
  		<div class="dropdown-content" id="myDropdown">
	    <a href="prime.php">Prime</a>
    	<a href="odd-even.php">Odd Even</a>
	    <a href="#">Marksheet</a>
		<a href="customer_invoice.php">Customer Invoice</a>
		<a href="palindrome.php">Palindrome</a>
		<a href="factorial.php">Factorial</a>
		<a href="#">Pyramid</a>
	  </div>
  </div> 
  <a href="#contactus">Contact us</a>
  <a href="login.php">Login</a>
  <a href="signup.php">Sign Up</a>
  <a href="login.php">Log Out</a>
</div>

<h3><?php session_start(); echo"Welcome to ".$_SESSION['username']; ?></h3>
<p></p>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
</script>
</form>
</body>
</html>
<?php
	if(isset($_POST['logout']))
	{
		header("Location:login.php");
		
		exit();
	}
?>