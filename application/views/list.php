<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
h2{
  left:50%;
}
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color:blue;
  color: white;
}

</style>
<?php 
$success = $this->session->userdata('success');
if($success !=""){
  ?>
  <div class ="alert alert-success"><?php echo $success;?> </div>
  <?php } ?>
  <?php 
$failure = $this->session->userdata('failure');
if($failure !=""){
  ?>
  <div class ="alert alert-success"><?php echo $failure;?> </div>
  <?php } ?>

</head>



<body>

<h2 style="text-align: center;">Record</h2>

<div style="text-right" >
<a href="<?php echo base_url().'index.php/user/create/'?>"class="btn btn-primary"style="float:right;" >Create New Record</a>
</div>
<table style="width:100%" class="vzebra-odd" id="customers" style="background-color: aquamarine;">
  <tr>
  <th>Sno</th>
<th>Name</th>
<th>Email</th>
<th>DOB</th>
<th>Mobile</th>
<th>Designation</th>  
<th>Gender</th>
<th>Hobbies</th>
 <th colspan="2">Action</th>
 
  </tr>
  <?php 
  error_reporting(0);
  $phone="";
  if(!empty($users)) 
   { $i=1;
     foreach($users as $user) {?>
    <tr class="odd">
    <td><?=$i++; ?> </td>
    <td><?php echo $user['name'];?></td>
    <td><?php echo $user['email'];?></td>
    <td><?php echo $user['dob'];?></td>
    <td><?php echo $user['mobile'];?></td>
    <td><?php echo $user['designation'];?></td>
    <td><?php echo $user['gender'];?></td>
    <td><?php echo $user['hobbies'];?></td>
   
      <td><a href="<?php echo base_url().'index.php/user/edit/' .$user['id']?>" class="btn btn-primary">Edit</a> </td>
      <td><a onclick="return confirm('are you sure want to delete')" href="<?php echo base_url().'index.php/user/delete/' .$user['id']?>" class="btn btn-danger">Delete</a> </td>
   <tr>
 <?php } } else { ?>
<tr>
    <td colspan="9">Record not found</td>
</tr>

<?php } ?>
</table>

</body>
</html>
