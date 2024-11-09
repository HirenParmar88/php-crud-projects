<html>
	<body>
	<form method="post">
		Enter Value : <input type= "number" name="number"><br>
		<input type="submit" value="SUBMIT" />
	</form>
	</body>
</html>
<?php
	if($_POST)
	{
		$number=$_POST['number'];
		$count=1;
		while($count<=10)
		{
			$mul=$number*$count;
			echo $number . " * ". $count . " = " . $mul;
			echo "<br>";
			$count++;
		}
	}
?>