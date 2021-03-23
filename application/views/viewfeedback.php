<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<style> table,th,tr,td{
			
            border:2px solid white;
            border-collapse:collapse;
            padding: 10px;
            margin:50px;
            background-color: black;
            color:white;
            margin-left: 550px;
            margin-top: 100px;

		}
		.bi
{
	background-color:rgba(0,0,0,0.3);
	background-image:url("../img/bkf.jpg");


	background-size:cover;
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
<table>
			<thead>
			  <tr>	
			  <th>Name</th>
			  <th>Feedback</th>
			   <th>Currentdate</th>
			 
			  </tr>	
			</thead>
			<tbody>
				<?php
			        if($n->num_rows()>0)  
			  		{
			  			foreach($n->result() as $row)
			  			{
			  				?>
			  				<tr>
			  					<td><?php echo $row->name;?></td>
			  					<td><?php echo $row->feedback;?></td>
			  					<td><?php echo $row->currentdate;?></td>
			  					
			  				
			  				<?php
			  			}
                        		   
			  		}
			  		?>
		
		    </tbody>


				
		   </table>
	</body>	
</html>
			  					
			  	