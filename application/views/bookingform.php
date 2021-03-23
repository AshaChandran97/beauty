<!DOCTYPE html>
<html>
<head>
	<title>user</title>
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
table,td,tr,form{
	
	padding:15px;
	margin:20px;
	border-collapse:collapse;
	text-align:left;
	}	
</style>
<body class="book">
    <a href="<?php echo base_url()?>main/userhome">Back to Home</a>
    <nav class="tagline"><h2>BEAUTY INNOVATIONS</h2></nav>
    <b><h3>Please fill in this form to book your package.</h3></b>
    </tr>  
	<form  method="post" style="border:1px solid #ccc" action="<?php echo base_url()?>main/bookinsert" >
		<!-- <fieldset style="width:40%;height:20%;"> -->
		
   	 <div class="container">
    		<table>
    		<tr>
    		<td><b>Name</b></td>
    		<td><input type="text" placeholder="Enter Name" name="name"  required=""></td>
    		</tr>
    		<tr>
    		<td><b>Address</b></td>
    		<td><textarea name="address" placeholder="Enter Address" type="address"></textarea></td>
    	</tr>
    	<tr>
    		<td><b>Age</b></td>
    		<td><input type="text" placeholder="Enter Age" name="age"  required=""></td>
    	</tr>
    	<tr>
    		<td><b>Phone</b></td>
    		<td><input type="text" placeholder="Enter Phone" name="phone"  required=""></td>
    	</tr>	
        <tr>
           <td> <label for="package"><b>Package</b></label>
               <td> <select name="package" id="package" type="option">
                    <option>Select your package
                    <option>package 1
                    <option>package 2
                    <option>package 3
                    <option>package 4
                </select> </td>
            </td>
        </tr> 
        <tr> 
            <td>
                <label for="date"><b>Preffered (date)</b></label>
                <td><input type="date" id="date" name="date"></td>
            </td>
        </tr>
        <tr> 
            <td>
                <label for="time"><b>Select a time</b></label>
                <td><input type="time" id="time" name="time"></td>
            </td>
        </tr>
  </div>
  <div class="container signin">
  	<td><button type="submit" name="submit" class="rbtn">BOOK NOW</button></td>
  </div>
<!-- </fieldset> -->
</form>	
</table>
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