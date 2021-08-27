<?php


class User_model extends CI_model{

     function create($formArray)
    {
    

     $this->db->insert("users",$formArray);  //insert into users (name,email,password.mobile) VALUES()

    }
     //for drop
     



    function all() 
    {
        return $users = $this->db->get("users")->result_array(); //SELECT *FROM users where id="$id"
        
    } 
    function getUser($userId)
    {   $this->db->where('id',$userId);
      return $user = $this->db->get('users')->row_array();
      
    }
    function updateUser($userId,$formArray)
    {
     $this->db->where('id',$userId);
   $this->db->update('users',$formArray); //UPDATE users SET name='$name',email='$email' .....WHERE id="$id"

    }
   function deleteUser($userId)
   {
     $this->db->where('id',$userId);
    $this->db->delete('users'); //DELETE FROM users WHERE id ="$id"
   }

   public function getprofile($userid){
    $query=$this->db->select('Name,qualification,city,state,emailId,mobileNumber,email,gender')
                  ->where('id',$userid)
                  ->from('tblusers')
                  ->get();
    return $query->row();  
  }
  
  

 
}
 
?>