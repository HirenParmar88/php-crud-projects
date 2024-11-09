<html>
	<head>
		<title>
			write a javascript to print name given in text box in following format..................
		</title>
		
		<script>
			function pattern1(txt)
			{
				x=txt.value;
				for(i=0;i<=x.length;i++)
				{
					for(j=0;j<i;j++)
					{
						document.write(x[j]);
					}
					document.write("<br>");
				}
			}
		</script>
	</head>
	<body>
		<center>
			<form>
				<table>
					<tr>
						<td>
							Enter Any String :
							<input type="textbox" name="txt"/>
						</td>
					</tr>
					<tr>
						<td align="center">
							<input type="button" value="show" onclick="pattern1(txt)"/>
						</td>
					</tr>
				</table>
			</form>
		</center>
	</body>
</html>