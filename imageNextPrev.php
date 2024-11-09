<html>
	<head>
		<title>
			to show image and next previous image load through buttons.......
		</title>
		<script>
		
			x=["pic1.jpg","pic2.jpg","pic3.jpg","pic4.jpg","pic5.jpg","pic6.jpg"];
			i=0;
			
			function next1(C:\xampp\htdocs\example\imgFolder\img1.jpg)
			{
				if(i==6)
				{
					i=0;
				}
				else
				{
					i++;
				}
				img1.src=x[i];
			}
				
			function prev1(C:\xampp\htdocs\example\imgFolder\img1.jpg)
			{
				if(i==0)
				{
					i=6;
				}
				else
				{
					i--;
				}
				img1.src=x[i];
			}
			
			function first(C:\xampp\htdocs\example\imgFolder\img1.jpg)
			{
				img1.src=x[0];
			}
		</script>
	</head>
	<body onload="first(C:\xampp\htdocs\example\imgFolder\img1.jpg)">
		<center>
			<form>
				<img name="C:\xampp\htdocs\example\imgFolder\img1.jpg" height="200" width="300"/>
				<input type="button" value="Next" onclick="next1(img1)"/>
				<input type="button" value="Prev" onclick="prev1(img1)"/>
			</form>
		</center>
	</body>
</html>