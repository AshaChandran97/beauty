`<!DOCTYPE html>
<html>
<head>
<style>
    
    input
    {
        padding:10px;
        margin:20px;
    }
    form
    {
         border:1px dashed grey;
        margin-left:500px;
        width:550px;
          text-align:center;
          font-size:20px;
      }
    
    h1
    {
        margin-left:900px;
    }

   .bi
{
    background-image:url("../img/50.jpg");
    background-size:cover;
    color:white;
}
h1
{
    margin-left:400px;
    font-size: 50px;
    margin-top: 10px;
}
</style>
<title>update user
</title>
</head>
 <body class="bi">
    <h1>BEAUTY INNOVATIONS</h1>
<form>
   
    <fieldset>
        <legend style="color:red">MY profile</legend>
    
    <?php
        if($n)
        {
            foreach($n->result() as $row)
            {
        ?>
            
    <table>
        <tr><td>
Name:</td><td>
<input type="text" name="name" value="<?php echo $row->name;?>"><br></td></tr>
<tr><td>Address:</td>
<td><textarea name="address"><?php echo $row->address;?></textarea><br></td></tr>
<tr><td>Age:</td>
<td><input type="text" name="age" value="<?php echo $row->age;?>"><br></td></tr>
<tr><td>Phone:</td>
<td><input type="text" name="phone" value="<?php echo $row->phone;?>"><br></td></tr>
<tr><td>Qualification:</td>
<td><input type="text" name="phone" value="<?php echo $row->qualification;?>"><br></td></tr>
<tr><td>Specialisation:</td>
<td><input type="text" name="phone" value="<?php echo $row->specialisation;?>"><br></td></tr>
<tr><td>Email:</td>
<td><input type="email" name="email" value="<?php echo $row->email;?>"><br></td></tr>
</table>
</fieldset>
<?php

                            }
                        }
                    
                        ?>

</form>
</body>
</html>



