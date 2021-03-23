<!DOCTYPE html>
<html>
<head>
	<title>updation</title>
	<style>
		fieldset{
			padding: 10px;
			margin-left:530px;
			text-align:center;
		}
		input{
			padding:10px;
			margin-top: 5px;
			text-align:center;
		}
		textarea{

			margin-top: 5px;
			text-align:center;
		}
    .bi
{
  background-image:url("../img/sms10.jpg");
  background-size:cover;
}
fieldset
   {
    background-color: rgba(0,0,0,.5);
    margin-top:30px;
    }
    h1{
      text-align: center;
    } <?php
        if(isset($user_data))
        {
            foreach($user_data->result() as $row1) 
            {
                ?>
    a{
      color:white;
    }
	</style>
</head>
<body class="bi">
  <a href="<?php echo base_url()?>main/staffhome">Back to Home</a>
  <h1>UPDATE PROFILE</h1>
   <form action="<?php echo base_url()?>main/update_staff" method="POST">
    
                <fieldset style="width:250px">
      <input type="text" name="name" value="<?php echo $row1->name;?>" ></br>
      <textarea  name="address"style="width:185px" value="<?php echo $row1->address;?></textarea></br>
      <input type="text" name="age"  value="<?php echo $row1->age;?>"></br>
      <input type="text" name="phone"  value="<?php echo $row1->phone;?>"></br>
      <input type="email" name="email"  value="<?php echo $row1->email;?>"></br>
      <input type="password" name="password" value="<?php echo $row1->password;?>"></br>
       <input type="submit" name="update" value="Update">
<?php
            }         
             }
             ?>
    </fieldset>

   </form>
</body>
</html>