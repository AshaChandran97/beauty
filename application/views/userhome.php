<!DOCTYPE html>
<html>
		<head>
			<title>USER_HOME_PAGE</title>
			<link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/style.css');?>" media="all">
    	<meta charset=utf-8>
    	<meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
    	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
    	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
		</head>
	<style>
	</style>
		<body class="user">
			<nav class="tagline"><h2>BEAUTY INNOVATIONS</h2></nav>
			<nav class="menubar">
        		<ul>
    				<li><a href="<?php echo base_url('main/');?>">HOME</a></li>	
    				<li>
    				  <a href="#" action="">PACKAGES</a>
    					<div class="submenu">
   							<ul>
								<li><a href="<?php echo base_url('main/viewpackage');?>"> VIEW PACKAGES </a></li>
								<li><a href="<?php echo base_url('main/bookform');?>"> BOOK PACKAGES </a></li>
						 	</ul>
						</div>
					</li>

					<li><a href="#" action="">FEEDBACK</a>
    					<div class="submenu">
   							<ul>
								<li><a href="<?php echo base_url('main/feedback');?>"> ADD FEEDBACK </a></li>
						 	</ul>
						</div>
					</li>

					<li>
					  <a href="#" action="">PROFILE</a>
    					<div class="submenu">
   							<ul>
	
								<li><a href="<?php echo base_url('main/updateuser');?>"> UPDATE </a></li>
						 	</ul>
						</div>
					</li>

    				<li><a href="<?php echo base_url('main/index');?>">LOGOUT</a></li>	
    			</ul>
    		</nav>
    		<!---Jquery--->
<script
  src="https://code.jquery.com/jquery-3.5.1.js"integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous">
</script>

<!---Popper---->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>

<!---Custom Js-->
<script src="js/script.js"></script>
		</body>
</html>