<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>create</title>
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
<h1>   Add Record</h1>
<div class="container">


    <form action="<?=base_url()?>user/create" method="POST" enctype="multipart/form-data">
   
        <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control">
       <?php echo form_error('name'); ?>
        </div>

        <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control">
        <?php echo form_error('email'); ?>
        </div>

        
        <div class="form-group">
        <label for="dob">dob</label>
        <input type="text" name="dob" class="form-control">
        <?php echo form_error('dob'); ?>
        </div>


        <div class="form-group">
        <label for="mobile">Phone</label>
        <input type="text" name="mobile" class="form-control">
        <?php echo form_error('mobile'); ?>
        </div>


        <div class="form-group">
        <label for="designation">Designation</label>
        <input type="text" name="designation" class="form-control">
        <?php echo form_error('designation'); ?>
        </div>

        <div class="form-group">
        <label for="gender"  class="form-lebel">Gender</label>

                    <select name="gender"  class="form-control" id="gender">
                    <option value="">Select:</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                    </select>
        <?php echo form_error('gender'); ?>
        </div>
        
        <div class="form-group">
        <label for="hobbies">Hobbies</label>
        <input type="text" name="hobbies" class="form-control">
        <?php echo form_error('hobbies'); ?>
        </div>
     

        <div class="form-group">
        <button type="submit" class="btn btn-primary">Add</button>
        <a href="http://localhost/ci3/ciproject/index.php/user/index" class="btn-secondary btn"style="float:center;">cancel</a>
    </div>
    </div> 
    </form>
    </div>
</body>
</html>  
