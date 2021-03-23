<html>
	<head>
		<title>MY_APPROVE_FORM</title>
	</head>
		<style>
			th,td{border:1px solid;
			padding:15px;border-collapse:collapse;text-align:center;}
			table
			{
				border-collapse:collapse;
				color: white;
			}
			h1
			{
				font-size: 40px;
				text-align: center;
				color:white;
			}

				.bi
{
	background-image:url("../img/beauty4.jpg");
	background-size:cover;
}

		</style>
			<body class="bi">
				<a href="<?php echo base_url()?>main/staffhome">Back to Home</a>
				<h1>BEAUTY INNOVATIONS</h1>
				<form method="post" action="">	
				<table>
					
						<tr>
							<th>NAME</th>
							<th>ADDRESS</th>
							<th>AGE</th>
							<th>PHONE</th>
							<th>PACKAGE</th>
							<th>DATE</th>
							<th>TIME</th>
							<th colspan="2">status</th>
						</tr>
							
							<?php
				
					if (isset($n))
					{
						foreach ($n->result() as $row)
						{
				?>
							<tr>
								<td><?php echo $row->name;?></td>
								<td><?php echo $row->address;?></td>
								<td><?php echo $row->age;?></td>
								<td><?php echo $row->phone;?></td>
								<td><?php echo $row->package;?></td>
								<td><?php echo $row->date;?></td>
								<td><?php echo $row->time;?></td>
								<?php
								if($row->status==0)
								{
									?>
									<td>Approved<td>
									
									<a href="<?php echo base_url()?>main/reject/<?php echo $row->id;?>">reject</a></td>
									<?php

								}
								elseif($row->status==1)
								{
									?>
									<td>Rejected</td>
									
									<td><a href="<?php echo base_url()?>main/approve/<?php echo $row->id;?>">approve</a></td>
									<?php
								}
								else
								{
									?>
									<td><a href="<?php echo base_url()?>main/approve/<?php echo $row->id;?>">approve</a></td>
									<td><a href="<?php echo base_url()?>main/reject/<?php echo $row->id;?>">reject</a></td>
									<?php
								}
								?>

							</tr>
						<?php
						}
						}
						?>		
							
				</form>
			</body>
</html>