<!DOCTYPE html>
<html>
<head>
	<title>admin home</title>
	<style>
		*{
	padding:0px;
	margin:0px;
}
.bi
{
	background-image:url("../img/31.jpeg");
	background-size:cover;
}
.menubar
{

	text-align:center;
	background-color:#006600;
}
.menubar ul
{
	list-style-type:none;
	display:inline-flex;
	padding:15px;
}
.menubar ul li a
{
	color:white;
	text-decoration:none;
	padding:10px;
}
.menubar ul li
{
	
	padding:15px;
}
.menubar ul li a:hover
{
	border-radius:10px;
	background-color:red;
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
	margin-left:-20px;

} 
.submenu ul
{
	display:block;
	
	

}
.submenu ul li
{
	border-bottom:2px solid red;
}
h1
{
	color:white;
	text-align: center;
	font-size: 50px;
}

	</style>
</head>
<body class="bi">
	<!--<h1>BEAUTY INNOVATIONS</h1>nav started-->
<nav class="menubar">
		<ul>
	    <li><a href="<?php echo base_url()?>main/index">Home</a></li>
		<li><a href="#">Staff</a>
			
				<div class="submenu">
					<ul> 
						<li><a href="<?php echo base_url()?>main/viewstaff">View</a></li>
						<li><a href="<?php echo base_url()?>main/addstaff">Add</a></li>
                	</ul>
            	</div>
		</li>
		<li><a href="<?php echo base_url()?>main/">User</a>
		   <div class="submenu"> 
		     <ul>
		       <li><a href="<?php echo base_url()?>main/viewusers">view</a></li>
		     </ul>	
		</li>
		<li><a href="<?php echo base_url()?>main/viewsalary">Salary</a></li>
		<li><a href="<?php echo base_url()?>main/viewfeedback">Feedback</a></li>
		<li><a href="<?php echo base_url()?>main/adminindex">Logout</a></li>
	  </ul>
	</nav>
	<h1>BEAUTY INNOVATIONS</h1>
	<!---nav ends--->
</body>
</html>