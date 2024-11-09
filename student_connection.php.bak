<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<?php
	$host='localhost';
	$username='root';
	$password='';
	$dbname='connection';
	$conn = mysqli_connect($host,$username,$password,$dbname);
	if(!$conn){
		die("Could not connect".mysqli_error($conn));
	}
	else{
		echo "Connected successfully";
	}

	
	if(isset($_POST['save']))
	{
		$no=$_POST['txt_id'];
		$name=$_POST['txt_name'];
		$city=$_POST['txt_city'];
		
		$sql="INSERT INTO data(ID,Name,City) VALUES('".$no."','".$name."','".$city."')";
		
		if(mysqli_query($conn,$sql))
		{
			echo"Record has been inserted Successfully : ";
		}
		else
		{
			echo"ERROR :".mysqli_error($conn);
		}
	}

	if(isset($_POST['Delete']))
	{
		$no=$_POST['txt_id'];
		$sql="DELETE FROM data WHERE ID='$no'";
		
		if(mysqli_query($conn,$sql))
		{
			echo"Record has been Deleted Successfully : ";
		}
		else
		{
			echo"ERROR :".mysqli_error($conn);
		}
		
	}
?>


<?php

	if(isset($_POST['select'])){
	$host='localhost';
	$username='root';
	$password='';
	$dbname='connection';
	$conn = mysqli_connect($host,$username,$password,$dbname);
	
	
	
	$query=mysqli_query($conn,$sql);
	
	if(!$query)
	{
		
		echo"query does not work ".mysqli_error($conn);
	}
	else
	{
		echo "Connectd";
	}
	
	while($data = mysqli_fetch_array($query))
	{
		
		echo"ID = ".$data['ID']."<br>";
		echo"Name=".$data['Name']."<br>";
		echo"City=".$data['City']."<br>";
	}
		
	}
?>

<?php
	if (isset($_POST['Update']))
	{
		$no=$_POST['txt_id'];
		$name=$_POST['txt_name'];
		$city=$_POST['txt_city'];
		
		$sql="UPDATE data SET Name='$name',City='$city' WHERE ID='$no'";
		if(mysqli_query($conn,$sql))
		{	
			echo"Record has been Update successfully.....";
		}
		else
		{	
			echo"Error".mysqli_error($conn);
		}
		
	}
?>

</head>

<body>
<form id="form1" name="form1" method="post" action="">
<table width="328" border="1">
  <tr>
    <td width="162" height="46" bgcolor="#00FF66">Roll No. :- </td>
    <td width="150">
      
      <input type="textbox" name="txt_id"/>
    </td>
  </tr>
  <tr>
    <td height="45" bgcolor="#CCCC33">Name :- </td>
    <td>&nbsp;
    <input type="textbox" name="txt_name"/></td>
  </tr>
  <tr>
    <td height="40" bgcolor="#CCCC33">City :- </td>
    <td>&nbsp;	<input type="textbox" name="txt_city"/></td>
  </tr>
    <td height="44" colspan="2" bgcolor="#0099FF">
        <input type="submit" name="save" value="Save" />
		<input type="submit" name="Delete" value="Delete" />
		<input type="submit" name="Update" value="Update" />
		<input type="submit" name="Select" value="Select" />
    </td>
	</tr>
</table>
</form>    
<hr>
<?php
	$sql="SELECT * FROM data";
	echo "<table border=1 rules='all'>";
	$result = mysqli_query($conn,$sql);

	if ($result->num_rows > 0) {
  
	echo "<tr>
		<th>ID</th>
		<th>Name</th>
		<th>City</th>";
	while($row = $result->fetch_assoc()) {
		echo "<tr>
				<td>".$row['ID']."</td>
				<td>".$row['Name']."</td>
				<td>".$row['City']."</td>
			</tr>";
	}
} else {
  echo "0 results";
}
	echo "</table>";
	
?>
</body>
</html>

