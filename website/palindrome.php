<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
.style1 {
	font-size: 18px;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style2 {
	font-size: 24px;
	font-weight: bold;
}
body,td,th {
	color: #6600CC;
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
    <a href="odd-even.php">Odd Even</a>
    <a href="#">Marksheet</a>
	<a href="customer_invoice.php">Customer Invoice</a>
	<a href="palindrome.php">Palindrome</a>
	<a href="factorial.php">Factorial</a>
	<a href="#">Pyramid</a>
	
  </div>
  </div> 
   <a href="#news">Contact us</a>
    <a href="login.php">Login</a>
	 <a href="signup.php">Sign Up</a>
</div>
<p></p>

<form method="post">

<table width="50%" border="1" cellspacing="0" cellpadding="0" align="center" bgcolor="#00CCFF" >

  <tr>
    <th colspan="2" scope="col"><span class="style2">Armstrong Number Checker</span></th>
  </tr>
  <tr>
    <th width="40%" scope="row">Enter Number</th>
    <td width="60%">
      <input type="number" name="no1" />      </td>
  </tr>
  <tr>
    <th colspan="2" scope="row"><label>
      <span class="style1">
      <input name="add" type="submit" value="Check" />
      </span></label>
  </tr>
  </table>
</form>

</body>
</html>

<?php
		if($_POST)
		{
				$no1=$_POST['no1'];
				$sum=0;
				$temp=$no1;
				while($no1>=1)
				{
					$rem=$no1%10;
					$sum =($sum*10)+ $rem;
					$no1=$no1/10;
					
				}
				echo $sum;
				echo "<br>";
				if($temp==$sum)
				{
					echo $temp . "is Palindrome ";
				}
				else
				{
					echo $temp . "is Not Palindrome ";
				}
		}
?>
