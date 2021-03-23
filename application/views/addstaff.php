<!DOCTYPE html>
<html>
<head>
	<title>addstaff</title>
	<style>
		fieldset{
			padding: 10px;
			margin-left:520px;
			text-align:center;
		}
		input{
			padding:10px;
			margin-top: 5px;
			text-align:center;
		}
		textarea{

			margin-top: 5px;
			text-align:center;
		}
		h1{
			text-align: center;
		}
		.bg{
			background-image:url("../img/101.jpg");
			background-size: cover; 
		}
		h1
		{
			font-size: 40px;
			text-align: center;	
		}
	</style>
</head>
<body class="bg">
	<a href="<?php echo base_url()?>main/adminindex">Back to Home</a>
	<h1>BEAUTY INNOVATIONS </h1>
   <form action="<?php echo base_url()?>main/insertstaff" method="POST">
   	
   	 	<fieldset style="width:250px">
   		<input type="text" name="name" placeholder="Name"></br>
   		<textarea placeholder="Address" name="address" style="width:185px"></textarea></br>
   		<input type="text" name="age"  placeholder="Age"></br>
   		<input type="text" name="phone"  placeholder="Phone number"></br>
   		<input type="text" name="qualification"  placeholder="Qualification"></br>
   		<input type="text" name="specialisation"  placeholder="Specialisation"></br>
   		<input type="email" name="email"  placeholder="Email"></br>
   		<input type="password" name="password"  placeholder="Password"></br>
   		 <input type="submit" name="submit" value="Register">
   	</fieldset>
   	  </form>
</body>
</html>