<!DOCTYPE html>
<html>
<head>
<title>first site</title>
<link rel="stylesheet" href="css/style.css">
<style>
*
{
	padding:0px;
	margin:0px;
}
.bi
{
	background-image:url("../img/30.jpeg");
	background-size:cover;
}
.menubar
{
	
	text-align:center;
	background-color: orange
}
.menubar ul
{
	list-style:none;
	display:inline-flex;
	padding:15px;
	
}
.menubar ul li a
{
	color:white;
	text-decoration:none;
	padding:20px;

}
.menubar ul li
{

	padding:15px;
	font-size: 20px;
	
}
.menubar ul li a:hover
{
	background-color:red;
	border-radius:20px 20px 20px 20px;


}
	
.submenu
{
	display:none;
}
.menubar ul li:hover .submenu
{
	display:block;
	position:absolute;
	border-radius:10px;
	margin-top:20px;

}
.submenu ul 
{
	display:block;
}
.submenu ul li 
{
	border-bottom:2px solid red;
}
.st
{
	font-size: 50px;
	color:orange ;
	text-align:center;
	margin-left: 700px;
	
}
.st1
{
	font-size: 50px;
	color:orange ;
	text-align:center;
	margin-top: 200px;
}
.img1
{
	width:300px;
	margin-top: 200px;
}
</style>
</head>
<body class="bi">
	<nav class="menubar">
<ul>
	<li><a href="<?php echo base_url()?>main/index">HOME</a></li>
	<li><a href="<?php echo base_url()?>main/login">LOGIN</a>
    </li>
<li><a href="<?php echo base_url()?>main/contact">CONTACTS</a></li>
<li><a href="<?php echo base_url()?>main/gallery">GALLERY</a></li>
<li><a href="<?php echo base_url()?>main/userform">REGISTRATION</a></li>
</ul>
</nav>
<div class="st">BEAUTY INNOVATIONS </div>
<marquee><h6 class="st"><i>what women really want!........</i></h6></marquee>
</body>
</html>