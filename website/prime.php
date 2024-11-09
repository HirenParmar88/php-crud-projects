<html>
	<head>
		
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
</style>
		
	</head>
	<body>
	<div align="center" ><h1>Smt.K.B.Parekh College of Computer Science Mahuva</h1></div>
<div align="center"><h2>BCA Sem-4 Assignment-1</h2></div>
<div class="navbar">
  <a href="#home">Home</a>
  <a href="#news">About us</a>
  <div class="dropdown">
  <button class="dropbtn" onClick="myFunction()">Assignment
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content" id="myDropdown">
    <a href="prime.php">Prime</a>
    <a href="#">Odd Even</a>
    <a href="#">Marksheet</a>
	<a href="#">Customer Invoice</a>
	<a href="#">Palindrome</a>
	<a href="#">Odd Even</a>
	<a href="#">Factorial</a>
	<a href="#">Pyramid</a>
	
  </div>
  </div> 
   <a href="#news">Contact us</a>
    <a href="login.php">Login</a>
	 <a href="signup.php">Sign Up</a>
</div>
<center>
	<form method="post">
		Enter Value : <input type= "number" name="number"><br>
		<input type="submit" value="SUBMIT" />
	</form>
</center>
	</body>
</html>
<?php
	if($_POST)
	{
		$number=$_POST['number'];
		$flag=1;
		$count=2;
		while($count<$number)
		{
			if($number%$count==0)
			{
				$flag=0;
				echo "$number is not prime";
				break;
			}
			$count++;
		}
		if($flag==1)
			echo "$number is prime";
	}
?>