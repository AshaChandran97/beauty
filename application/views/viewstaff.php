<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<style> 
			table,th,tr,td{
			
            border:2px solid black;
            border-collapse:collapse;
            padding: 10px;
            margin:50px;
           

		}
		.bi
{
	background-color:rgba(0,0,0,0.3);
    background-image:url("../img/113.jpg");
    background-size:cover;

}
h1
{
	text-align: center;
	font-size: 40px;
}
	</style>
	</head>
<body class="bi">
<a href="<?php echo base_url()?>main/adminindex">Back to Home</a>	
	<h1>BEAUTY INNOVATIONS</h1>
<table>
			<thead>
			  <tr>	
			  <th>Name</th>
			  <th>Address</th>
			  <th>Age</th>
			  <th>Phone number</th>
			  <th>Qualification</th>
			  <th>Specialization</th>
			   <th>Email</th>
			 
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
			  					<td><?php echo $row->address;?></td>
			  					<td><?php echo $row->age;?></td>
			  					<td><?php echo $row->phone;?></td>
			  					<td><?php echo $row->qualification;?></td>
			  					<td><?php echo $row->specialisation;?></td>
			  					<td><?php echo $row->email;?></td>
			  					
			  				
			  				<?php
			  			}
                        		   
			  		}
			  		?>
		
		    </tbody>


				
		   </table>
	</body>	
</html>
			  					
			  	