</!DOCTYPE html>
<html>
<head>
	<title>upload bill</title>
	<style>
		input
		{
			margin-top:10px;
		}
		.bi
		{
		background-image:url("../img/50.jpg");
		
		}

input,h2
{
	text-align: center;
	font-size: 20px;
	color:white;
}
fieldset
{
	width:100px;
	margin-left: 450px;
	margin-top: 100px;
}
h1
{
	font-size: 40px;
	text-align: center;
	color:white;
}

	</style>
</head>
<body class="bi">
	<a href="<?php echo base_url()?>main/staffhome">Back to Home</a>
	<h1>BEAUTY INNOVATIONS</h1>
	<form action="<?php echo base_url()?>main/fileupload" method="POST">
		<fieldset>
			<h2>Upload file</h2>
			<input type="file" name="pic">
			<br>
			<input type="submit" name="submit" value="upload">

		</fieldset>
	</form>

</body>
</html>