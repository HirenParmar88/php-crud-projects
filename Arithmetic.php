<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
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
-->
</style>
</head>

<body>
<form method="post">

<table width="50%" border="1" cellspacing="0" cellpadding="0" align="center" bgcolor="#00CCFF" >

  <tr>
    <th colspan="2" scope="col"><span class="style2">Arithmetic Operation </span></th>
  </tr>
  <tr>
    <th width="40%" scope="row">Enter Number 1 </th>
    <td width="60%">
      <input type="number" name="no1" />      </td>
  </tr>
  <tr>
    <th scope="row">Enter Number 2 </th>
    <td><input type="number" name="no2" /></td>
  </tr>
  <tr>
    <th colspan="2" scope="row"><label>
      <span class="style1">
      <input name="add" type="submit" value="+" />
      <input name="sub" type="submit" value="-" />
      </span></label>
      <span class="style1">
      <input name="mul" type="submit" value="*" />  
      <input name="div" type="submit" value="/" />
      </span> 
  </tr>
  </table>
</form>

</body>
</html>

<?php
		if($_POST)
		{
			if($_POST['add'])
			{
				$no1=$_POST['no1'];
				$no2=$_POST['no2'];
				$total=$no1+$no2;
				echo $total;
			}
			else if($_POST['sub'])
			{
				$no1=$_POST['no1'];
				$no2=$_POST['no2'];
				$total=$no1-$no2;
				echo $total;
			}
			else if($_POST['mul'])
			{
				$no1=$_POST['no1'];
				$no2=$_POST['no2'];
				$total=$no1*$no2;
				echo $total;
			}
			else if($_POST['div'])
			{
				$no1=$_POST['no1'];
				$no2=$_POST['no2'];
				$total=$no1/$no2;
				echo $total;
			}
		}
			/*
			$sign=$_POST['sign'];
			switch($sign)
			{
				case '+':
					$no1=$_POST['no1'];
					$no2=$_POST['no2'];
					$total=$no1+$no2;
					echo $total;
					brak;
				case '-':
					$no1=$_POST['no1'];
					$no2=$_POST['no2'];
					$total=$no1-$no2;
					echo $total;
					break;
				case '*':
					$no1=$_POST['no1'];
					$no2=$_POST['no2'];
					$total=$no1*$no2;
					echo $total;
					break;
				case '/':
					$no1=$_POST['no1'];
					$no2=$_POST['no2'];
					$total=$no1/$no2;
					echo $total;
					break;
			}*/
		
?>
