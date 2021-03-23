<!DOCTYPE html>
<html>
<head>
<style>
	
	input
	{
		padding:10px;
		margin:20px;
	}
	form
	{
         border:1px dashed grey;
		margin-left:800px;
		width:550px;
          text-align:center;
          font-size:20px;
      }
	
	h2
	{
		margin-left:900px;
	}

   .bi
{
    background-image:url("../img/beauty1.jpg");
    background-size:cover;
}
h1
{
	margin-left:400px;
}
</style>
<title>user form
</title>
</head>
 <body class="bi">
 	<a href="<?php echo base_url()?>main/index">Back to home</a>
 	<h1>BEAUTY INNOVATIONS</h1>
<h2>REGISTRATION </h2>
<form method="post" action="<?php echo base_url()?>main/insert">
	<fieldset>
		<legend>You can register here</legend>
	</fieldset>
	<table>
		<tr><td>
Name:</td><td>
<input type="text" name="name"><br></td></tr>
<tr><td>Address:</td>
<td><textarea name="address"></textarea><br></td></tr>
<tr><td>Age:</td>
<td><input type="text" name="age"><br></td></tr>
<tr><td>Phone:</td>
<td><input type="text" name="phone"><br></td></tr>
<tr><td>Email:</td>
<td><input type="email" name="email"><br></td></tr>
<tr><td>Password:</td>
<td><input type="password" name="password"><br></td></tr>
</table>
<input type="submit" value="Register" align="center">
</form>
</body>
</html>



