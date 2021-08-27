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
    <title>registration</title>
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
<h1>  Please Register here</h1>
<div class="container">


    <form action="hello_model.php" method="POST">
   
        <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" class="form-control">
        </div>
        <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control">
        <div class="form-group">
        <label for="mobile">Phone</label>
        <input type="text" name="mobile" class="form-control">
        </div>
        
        </div>
        <input type="submit" name="submit" class="btn btn-default" value="Save Data">
    </div> 
    </form>
    </div>
</body>
</html>