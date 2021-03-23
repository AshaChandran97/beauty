<!DOCTYPE html>
<html>
<head>
	<title>new</title>
</head>
<style>
	*
{
	padding:0px;
	margin:0px;
}
.bi
{
	background-image:url("../img/back.jpg");
	background-size:cover;
}
.menubar 
{
	background-color:black;
	text-align:center;
	
}
.menubar ul
{
	list-style:none;
	display:inline-flex;
	padding:15px;
	
}
.menubar ul li a
{
	text-decoration:none;
	color:white;
	padding:15px;
}
.menubar ul li
{
	padding:10px;
	
}
.menubar ul li a:hover
{
	background-color:red;
	border-radius:10px;
	
}
.submenu
{
	display:none;
}
.menubar ul li:hover .submenu 
{
	display:block;
	position:absolute;
	background-color:black;
	border-radius:10px;
	
}
.menubar ul li:hover .submenu ul
{
	display:block;
}
.submenu ul li
{
	border-bottom:2px solid red;
}
.row
{

	display:flex;
}
.col
{
	width:450px;
	height:350px;
	padding:15px;
	margin:20px;
	background-color:rgba(0,0,0,0.4);
	text-align:justify;
	color:white;
}
.col h2
{
	text-align:center;
	text-decoration:underline;
}
.ft 
{
	background-color:black;
	padding:50px;
	text-align:center;
	color:white;
}
fieldset
{
	background-color: rgba(0,0,0,0.5);
	margin-top: 50px;
	margin-left: 550px;
	height:200px;
	width:400px; 
	text-align: center;


}
.first
{
		background-image:url("../img/beauty2.jpg");
		background-size:cover;
		height: 700px;
		
	
}
h1
{
	font-size: 60px;
}



table{
	
	padding:20px;
	margin:50px;
	border-collapse:collapse;
	text-align:center;
	}	
</style>
<body>
	<div class="first">
		<nav class="menubar">

	<ul>
		<li> <a href="<?php echo base_url()?>main/index">HOME </a></li>
		<li> <a href="<?php echo base_url()?>main/userform">REGISTRATION</a>
			<div class="submenu">
			</div>
		</li>

	</ul>
</nav>
		<div><h1 style="color:white;text-align: center">BEAUTY INNOVATIONS</h1></div>
		

				

				
	<form method="post" action="<?php echo base_url()?>main/logns">
		<fieldset>
			<div><h2 style="color: red">login</h2></div>
			<br>
		<table border="1">
		

				 email:
					<input type="email" name="email"></br></br>
					password:
					<input type="password" name="password"></br><br>
					<input type="submit" value="submit" name="submit">
				</fieldset>
				
				
				
					
</table>
</form>
</body>
</html>