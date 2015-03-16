<html>

<head>
<title> Homepage : Database result</title>
</head>

<body>

<h2>User Data</h2>
<table>
	<tr style="background-color:#336699;color:#eeeeee">
		<td>First Name</td>
		<td>Last Name</td>
	</tr>	
	
	{foreach from=$result item=view}
		<tr bgcolor="{cycle values="#ffffff,#eeeeee"}">
			<td>{$view.firstname}</td>
			<td>{$view.lastname}</td>	
		</tr>
	{/foreach}
	
</table>

</body>

</html>