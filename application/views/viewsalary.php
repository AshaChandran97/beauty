<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<style> table,th,tr,td{
			
            border:2px solid black;
            border-collapse:collapse;
            padding: 10px;
            margin:50px;
            margin-left:550px;

		}
		.bi
{
	background-color:rgba(0,0,0,0.3);
}
.be
{
	background-image:url("../img/101.jpg");
}
h1
{
	text-align: center;
	font-size: 40px;
}
	</style>
	</head>
<body class="be">
	<a href="<?php echo base_url()?>main/adminindex">Back to Home</a>
<h1>BEAUTY INNOVATIONS</h1>	
<table>
			<thead>
			  <tr>	
			  <th>Bill</th>
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
			  				
			  					<td><a href="<?php echo base_url("/upload/");if($row->bill) echo $row->bill; else echo"no-report.pdf";?>" target="_blank">Salary bill</a></td>
			  					<td><?php echo $row->currentdate;?></td>
			  					
			  				
			  				<?php
			  			}
                        		   
			  		}
			  		?>
		
		    </tbody>


				
		   </table>
	</body>	
</html>
			  					
			  	