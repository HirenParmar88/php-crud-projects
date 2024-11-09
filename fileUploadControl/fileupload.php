<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form method="post">
	<input type="submit" value="Display" name="display" />
</form>
<?php

	if(isset($_POST['Submit1']))
	{ 
		session_start();
		$_SESSION['path'] = "images/" . basename($_FILES["file"]["name"]);

		if(move_uploaded_file($_FILES["file"]["tmp_name"], $_SESSION['path'])) 
		{
			echo "The file ". basename( $_FILES["file"]["name"]). " uploaded..";
		}
		else
		{
			echo "Error !!";
		}
	}

	if(isset($_POST['display']))
	{
		session_start();
		//$filepath = "images/" . $_FILES["file"]["name"];
		echo '<img src="'.$_SESSION['path'].'" />'; 
	}
?>
</body>
</html>