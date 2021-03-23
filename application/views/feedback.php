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
fieldset
{
	background-color: rgba(0,0,0,0.5);
	margin-top: 50px;
	margin-left: 750px;
	height:200px;
	width:400px; 
	text-align: center;


}
.first
{
		background-image:url("../img/beauty4.jpg");
		background-size:cover;
		height: 700px;
		
	
}
h1
{
	font-size: 60px;
}



table{
	
	padding:50px;
	margin:50px;
	border-collapse:collapse;
	text-align:center;

	}	
	legend
	{
		margin-top: 10px;
	}
</style>
<body>
	<a href="<?php echo base_url()?>main/userhome">Back to Home</a>
	<div class="first">
		<nav class="menubar">

	<ul>
		<li> <a href="">HOME </a></li>
			<div class="submenu">
				<ul>
					<li> <a href=""></a></li></li>
					<li> <a href=""></a></li>
				</ul>
			</div>
		</li>

	</ul>
</nav>
		<div><h1 style="color: orange;text-align: center">BEAUTY INNOVATIONS</h1></div>
		

				

				
	<form method="post" action="<?php echo base_url()?>main/feedbacks">
		<fieldset>
			<i>your feedback is most valuable for us</i>
		
		<table border="1">
						<p>Please fill in your valuable review</p><br>
						
							<textarea name="feedback" placeholder="feedback">feedback
							</textarea><br>
							<input type="submit" value="submit" name="submit">
					
				</fieldset>
				
				
				
					
</table>
</form>
</body>
</html>