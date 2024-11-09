<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 16px;
	color: #FF3300;
	font-weight: bold;
}
.style2 {font-size: 10px}
-->
</style></head>

<body>
<form method = "post">
<table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="4"><p>Inoive No : 
        <input type="number" name="Inumber" />
    </p>
    <p>Party Name : 
      <input type="text" name="textfield" />
</p>
    <p>City : 
      <input type="text" name="textfield2" />
    </p>
    <p>Mo :  
      <input type="number" name="Inumber2" />
    </p></td>
    <td colspan="3"><p>PAN Number : 
        <input type="text" name="Inumber22" />
    </p>
    <p>GST Number :  
      <input type="number" name="Inumber222" />
    </p></td>
  </tr>
  <tr>
    <td width="12%"><p>SR No</p>
    <p>
      <input type="number" name="sr1" />
      <input type="number" name="sr2" />
      <input type="number" name="sr3" />
      <input type="number" name="sr4" />
      <input type="number" name="sr5" />
    </p>    </td>
    <td width="14%"><p>Product Name </p>
    <p>
      <input type="text" name="textfield22" />
      <input type="text" name="textfield23" />
      <input type="text" name="textfield24" />
      <input type="text" name="textfield25" />
      <input type="text" name="textfield26" />
    </p></td>
    <td width="13%"><p>Qty</p>
    <p>
      <input type="number" name="qty1" />
      <input type="number" name="qty2" />
      <input type="number" name="qty3" />
      <input type="number" name="qty4" />
      <input type="number" name="qty5" />
    </p></td>
    <td width="13%"><p>Price</p>
    <p>
      <input type="number" name="price1" />
      <input type="number" name="price2" />
      <input type="number" name="price3" />
      <input type="number" name="price4" />
      <input type="number" name="price5" />
    </p></td>
    <td width="16%"><p>GST (%) </p>
    <p>
      <input type="number" name="gst1" />
      <input type="number" name="gst2" />
      <input type="number" name="gst3" />
      <input type="number" name="gst4" />
      <input type="number" name="gst5" />
    </p></td>
    <td width="16%"><p>Tax_Amount</p>
    <p>

	<?php
	session_start();
	if($_POST)
	{
		$_SESSION['qty1']=$_POST['qty1'];
		$_SESSION['price1']=$_POST['price1'];
		$_SESSION['gst1']=$_POST['gst1'];
		
		$_SESSION['total1']=0;
		$_SESSION['total1']=($_SESSION['qty1']*$_SESSION['price1'])*$_SESSION['gst1']/100;

		echo '<input type="number" name="ta1" value="'.$_SESSION['total1'].'" />';
	}
	?>
	
	
	<?php
	if($_POST)
	{
		$_SESSION['qty2']=$_POST['qty2'];
		$_SESSION['price2']=$_POST['price2'];
		$_SESSION['gst2']=$_POST['gst2'];
		
		$_SESSION['total2']=0;
		$_SESSION['total2']=($_SESSION['qty2']*$_SESSION['price2'])*$_SESSION['gst2']/100;
		
		echo '<input type="number" name="ta2" value="'.$_SESSION['total2'].'" />';
	}
	?>
	
	
	<?php
	if($_POST)
	{
		$_SESSION['qty3']=$_POST['qty3'];
		$_SESSION['price3']=$_POST['price3'];
		$_SESSION['gst3']=$_POST['gst3'];
		
		$_SESSION['total3']=0;
		$_SESSION['total3']=($_SESSION['qty3']*$_SESSION['price3'])*$_SESSION['gst3']/100;
		
		echo '<input type="number" name="ta3" value="'.$_SESSION['total3'].'" />';
	}
	?>
	
	
	<?php
	if($_POST)
	{
		$_SESSION['qty4']=$_POST['qty4'];
		$_SESSION['price4']=$_POST['price4'];
		$_SESSION['gst4']=$_POST['gst4'];
		
		$_SESSION['total4']=0;
		$_SESSION['total4']=($_SESSION['qty4']*$_SESSION['price4'])*$_SESSION['gst4']/100;
		
		echo '<input type="number" name="ta4" value="'.$_SESSION['total4'].'" />';
	}
	?>
	
	<?php
	if($_POST)
	{
		$_SESSION['qty5']=$_POST['qty5'];
		$_SESSION['price5']=$_POST['price5'];
		$_SESSION['gst5']=$_POST['gst5'];
		
		$_SESSION['total5']=0;
		$_SESSION['total5']=($_SESSION['qty5']*$_SESSION['price5'])*$_SESSION['gst5']/100;
		
		echo '<input type="number" name="ta5" value="'.$_SESSION['total5'].'" />';
	}
	?>
	</p></td>
    <td width="16%" align="center"><p>Total</p>
    <p>
	<?php
		$_SESSION['gtot1']=($_SESSION['qty1']*$_SESSION['price1'])+$_SESSION['total1'];
		echo '<input type="number" name="tot1" value="'.$_SESSION['gtot1'].'" />';
	?>
	
	
	<?php
		$_SESSION['gtot2']=($_SESSION['qty2']*$_SESSION['price2'])+$_SESSION['total2'];
		echo '<input type="number" name="tot2" value="'.$_SESSION['gtot2'].'" />';
	?>
	
	
	<?php
		$_SESSION['gtot3']=($_SESSION['qty3']*$_SESSION['price3'])+$_SESSION['total3'];
		echo '<input type="number" name="tot3" value="'.$_SESSION['gtot3'].'" />';
	?>
	
	
	<?php
		$_SESSION['gtot4']=($_SESSION['qty4']*$_SESSION['price4'])+$_SESSION['total4'];
		echo '<input type="number" name="tot4" value="'.$_SESSION['gtot4'].'" />';
	?>
	
	
	<?php
		$_SESSION['gtot5']=($_SESSION['qty5']*$_SESSION['price5'])+$_SESSION['total5'];
		echo '<input type="number" name="tot5" value="'.$_SESSION['gtot5'].'" />';
	?>
	<span class="style2"></span>    </p></td>
  </tr>
  <tr>
    <td colspan="7"><center><input type="submit" name="Submit" value="Calculate" /></center></td>
  </tr>
</table>
<form>
</body>
</html>