<?php
	$age=["bill"=>25,"book"=>28,"pen"=>22];
	echo"<ul>";
	
	foreach($age as $key=>$value)
	{
		echo"<li>$key = $value</li>";
	}
	echo"</ul>";
?>