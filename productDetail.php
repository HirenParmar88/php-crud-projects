<html>
	<head>
		<title>
			cerate webbase application to perform following task using php......................
		</title>
	</head>
	<body>
		<center>
			<form>
				<table height="300px" width="500px" border="0" bgcolor="rgb(99,77,30)">
					<tr >
						
						<th >............ PRODUCT - DETAIL ............</th>
						
					</tr>
					<tr>
						<td>Product_ID :</td>
						<td>
							<input type="text" name="text"/>
						</td>
					</tr>
					<tr>
						<td>Product_Name :</td>
						<td>
							<input type="text" name="text"/>
						</td>
					</tr>
					<tr>
						<td>Product_Qty :</td>
						<td>
							<input type="text" name="text"/>
						</td>
					</tr><tr>
						<td>Product_Rate :</td>
						<td>
							<input type="text" name="text"/>
						</td>
					</tr>
					<tr>
						<td>Total_Amount :</td>
						<td>
							<input type="text" name="text"/>
						</td>
					</tr>
					<tr>
						<td>
							<input type="button" name="save" value="Save">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="button" name="update" value="Update">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="button" name="delete" value="Delete">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="button" name="show" value="Show">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<td>
					</tr>
				</table>
			</form>
		</center>
	<body>
</html>

<?php

	$host='localhost';
	$username='root';
	$password='';
	$dbname='product';
	
	$conn = mysqli_connect($host,$username,$password,$dbname);
	
	if(!$conn){
		die("Could not connect".mysqli_error($conn));
	}
	else{
		echo "Connected successfully";
	}
	
	if(isset($_POST['save']))
	{
		$Product_ID=$_POST['Product_ID'];
		$Product_Name=$_POST['Product_Name'];
		$Product_Qty=$_POST['Product_Qty'];
		$Product_Rate=$_POST['Product_Rate'];
		$total_Amount=$_POST['total_Amount'];
		
		$sql="INSERT INTO productdata(Product_ID,Product_Name,Product_Qty,Product_Rate,total_Amount) VALUES('".Product_ID."','".Product_Name."','".Product_Qty."','".Product_Rate."','".total_Amount."')";
		
		if(mysqli_query($conn,$sql))
		{
			echo"Record has been inserted Successfully : ";
		}
		else
		{
			echo"ERROR :".mysqli_error($conn);
		}
	}
?>
<?php
	
	if(isset($_POST['Delete']))
	{
		$no=$_POST['Product_ID'];
		$sql="DELETE FROM data WHERE Product_ID='$Product_ID'";
		
		if(mysqli_query($conn,$sql))
		{
			echo"Record has been Deleted Successfully : ";
		}
		else
		{
			echo"ERROR :".mysqli_error($conn);
		}
		mysqli_close($conn);
	}
?>

<?php

	if(isset($_POST['select'])){
	$host='localhost';
	$username='root';
	$password='';
	$dbname='product';
	$conn = mysqli_connect($host,$username,$password,$dbname);
	
	$sql="SELECT * FROM data";
	
	$query=mysqli_query($conn,$sql);
	
	if(!$query)
	{
		
		echo"query does not work ".mysqli_error($conn);die;
	}
	
	while($data = mysqli_fetch_array($query))
	{
		
		echo"Product_ID= ".$data['Product_ID']."<br>";
		echo"Product_Name=".$data['Product_Name']."<br>";
		echo"Product_Qty=".$data['Product_Qty']."<br>";
		echo"Product_Rate=".$data['Product_Rate']."<br>";
		echo"total_Amount=".$data['total_Amount']."<br>";
	}
		
	}
?>