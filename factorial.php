<html>
	<body>
	<form method="post">
		Enter Value : <input type= "number" name="no1"><br>
		<input type="submit" value="SUBMIT" />
	</form>
	</body>
</html>
<?php
	if($_POST)
	{
		$number=$_POST['no1'];
		$mul=1;
		while($number>=1)
		{
			$mul=$mul*$number;
			$number--;
		}
		echo $mul;
	}
?>