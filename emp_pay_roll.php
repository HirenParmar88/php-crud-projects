<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Employee Pay Roll</title>
<style type="text/css">
<!--
.style6 {font-size: 18px; font-weight: bold; font-family: Arial, Helvetica, sans-serif; color: #FF0000; }
-->
</style>
</head>

<form method="post">
<body>
<table width="70%" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bgcolor="#FC992C">
  <tr>
    <td colspan="2"><p class="style6">&nbsp;</p>
      <p class="style6">ID :</p>
      <p class="style6">Name : </p>
    <p class="style6">&nbsp;</p></td>
    <td colspan="3"><p align="left" class="style6">&nbsp;
      </p>
      <p align="left" class="style6">
        <input type="number" name="textfield">
        </p>
      <p align="left" class="style6">
      <input type="text" name="textfield2">
</p>
    <p align="left" class="style6">&nbsp;</p></td>
  </tr>
  <tr height="50px">
    <td><div align="left" class="style6">Salary</div></td>
    <td><div align="left" class="style6">HRA (15%) </div></td>
    <td><div align="left" class="style6">TA (10%) </div></td>
    <td><div align="left" class="style6">DA (5%) </div></td>
    <td><div align="left" class="style6">Total Salary </div></td>
  </tr>
  <tr>
    <td><input type="number" name="salary"></td>
    <td><?php
		$_SESSION['salary']=$_POST['salary'];
		$_SESSION['hra']=$_SESSION['salary']*15/100;
		echo '<input type="number" name="total" value="'.$_SESSION['hra'].'">';
	  	?></td>
    <td><?php
		$_SESSION['ta']=$_SESSION['salary']*10/100;
		echo '<input type="number" name="ta" value="'.$_SESSION['ta'].'">';
	  	?></td>
    <td><?php
		$_SESSION['da']=$_SESSION['salary']*5/100;
		echo '<input type="number" name="da" value="'.$_SESSION['da'].'">';
	  	?></td>
    <td><p>
		<?php
		$_SESSION['total']=$_SESSION['hra']+$_SESSION['ta']+$_SESSION['da']+$_SESSION['salary'];
	    echo '<input type="number" name="total" value="'.$_SESSION['total'].'" >';
	  	?>
    </p>    </td>
  </tr>
  <tr>
    <td colspan="5"><div align="center">
      <input type="submit" name="Submit" value="Calculate">
    </div></td>
  </tr>
</table>
</body>
</form>
</html>