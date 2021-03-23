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
	background-color:#034f84;
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
	background-color:blue;
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

.first
{
		background-image:url("../img/32.jpeg");
		background-size:cover;
		height: 700px;
}
h1
{
	font-size: 60px;
}



</style>
<body>
	<div class="first">
		<nav class="menubar">

	<ul>
		<li> <a href="<?php echo base_url()?>main/home">HOME </a></li>
		<li> <a href="<?php echo base_url()?>main/updatestaff">PROFILE</a></li>
		<li> <a href="<?php echo base_url()?>main/viewfeedback">FEEDBACK</a></li>
		<li><a href="<?php echo base_url()?>main/approvedetails">APPOINTMENTS</a></li>
		<li><a href="<?php echo base_url()?>main/upload">SALARY BILL</a></li>
		<li><a href="<?php echo base_url()?>main/">LOGOUT</a></li>
			

	</ul>
</nav>
		<div><h1 style="color: white;text-align: center">BEAUTY INNOVATIONS</h1></div>
				
	<form method="post" action="<?php echo base_url()?>main/feedbacks">
				
				
					
</table>
</form>
</body>
</html>