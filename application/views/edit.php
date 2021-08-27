<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>update</title>
    <style>
    form{
        background-color:rgb(240, 240, 240);
        margin-left :30%;
        margin-right: 30%;


    }
        body{
            background-color:LIGHTGRAY;   

        }
        h1{
       margin-left :35%;
        margin-right: 30%;
        }
       
    </style>
</head>
<body>
<h1> Edit Record</h1>
<div class="container">


    <form action="<?php echo base_url().'user/edit/'.$user['id'];  ?>" method="POST">

        <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control"value="<?php echo set_value('name',$user['name'])?>">
       <?php echo form_error('name'); ?>
        </div>
        
        <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" class="form-control" value="<?php echo set_value('email',$user['email'])?>">
        <?php echo form_error('email'); ?>
        </div>

        <div class="form-group">
        <label for="dob">Date of Birth</label>
        <input type="text" name="dob" class="form-control" value="<?php echo set_value('dob',$user['dob'])?>">
        <?php echo form_error('dob'); ?>
        </div>


        <div class="form-group">
        <label for="mobile">Phone</label>
        <input type="text" name="mobile" class="form-control"value="<?php echo set_value('mobile',$user['mobile'])?>">
        <?php echo form_error('mobile'); ?>
        </div>
   
        
        
        <div class="form-group">
        <label for="designation">Designation</label>
        <input type="text" name="designation" class="form-control" value="<?php echo set_value('designation',$user['designation'])?>">
        <?php echo form_error('designation'); ?>
        </div>
        

        <label for="gender">Gender</label>

                    <select name="gender"  class="form-control" >
                    <option value="<?php echo set_value('gender',$user['gender'])?>"><?php echo set_value('gender',$user['gender'])?></option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                    </select>

         <div class="form-group">
        <label for="hobbies">Hobbies</label>
        <input type="text" name="hobbies" class="form-control" value="<?php echo set_value('hobbies',$user['hobbies'])?>">
        <?php echo form_error('hobbies'); ?>
        </div>

        <div class="form-group">
        <button class="btn btn-primary">Update</button>
        <a  href="<?php echo base_url().'index.php/user/index';?>" class="btn-secondary btn">cancel</a>
    </div>
    </div> 
    </form>
    </div>
</body>
</html>  