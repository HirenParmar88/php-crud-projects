<html>
	<head>
		<title>
			item_table............
		</title>
	</head>
	<body>
		<form>
		<table>
			<fieldset>
				<h2><lagend> item_table</lagend><br><br></h2>
				
				<h4>Iid :<br>
				<input type="text" name="text"/><br><br>
				
				Price :<br>
				<input type="text" name="text"><br><br>
				
				Qty :<br>
				<input type="text" name="text"><br><br>
				
				<input type="button" name="save" value="Save">&nbsp;&nbsp;
				<input type="button" name="update" value="Update">&nbsp;&nbsp;
				<input type="button" name="delete" value="Delete">&nbsp;&nbsp;
				<input type="button" name="select" value="Select">
				
			</fieldset>
		</table>
		</form>
	</body>
</html>

<?php

	$host="localhost";
	$username="root";
	$password="";
	$dbname="item";
	
	$conn = mysqli_connect($host,$username,$password,$dbname);
	if(!$conn){
		die("Could not connect".mysqli_error($conn));
	}
	else{
		echo "Connected successfully";
	}
	
	if(isset($_POST['save']))
	{
		$Iid=$_POST['txt_Iid'];
		$Price=$_POST['txt_Price'];
		$Qty=$_POST['txt_Qty'];
		
		$sql="INSERT INTO item_table(Iid,Price,Qty) VALUES('".$Iid."','".$Price."','".$Qty."')";
		
		if(mysqli_query($conn,$sql))
		{
			echo"Record has been inserted Successfully ! ";
		}
		else
		{
			echo"ERROR !!!".mysqli_error($conn);
		}
	}
?>