<?php
session_start();
require 'connection.php';
if(isset($_POST['login'])){      
       
$username=$_POST['username'];   
$password=$_POST['password'];
$user_role=$_POST['userrole'];




if($user_role=='student'){
    
    $sth = $conn->prepare("SELECT count('id') FROM registration WHERE username = '$username' AND password = '$password'");
    $sth->execute();
    $count = $sth->fetchColumn(); 
    if($count==1){
        
            $_SESSION['username']=$username;
            header('location: profile.php'); 
        
    }
    else {
        
        echo "Username and Password could be wrong or you are not a registered student"   ;
    }

    
} 
else if($user_role=='teacher')    {
    
    $sth = $conn->prepare("SELECT count('id') FROM te_registration WHERE username = '$username' AND password = '$password'");
    $sth->execute();
    $count = $sth->fetchColumn();  
    
        if($count==1){
        
        $_SESSION['username']=$username;    
        header('location: teprofile.php');
        
        }
    else {
        
        echo "Username and Password could be wrong or you are not a registered Teacher"   ;
        }

    
}  

else if($user_role=='webadmin'){
              
    $sth = $conn->prepare("SELECT count('id') FROM admin_data WHERE username = '$username' AND password = '$password'");
    $sth->execute();
    $count = $sth->fetchColumn();  
          
          if($count==1){
        
            $_SESSION['username']=$username;
            header('location: adminarea.php');
        
            }
            
            else    {
        
             echo "Username and Password could be wrong or you are not a registered Admin"   ;
             
            }         
          

          
      }
      
      else{
          
          echo "Username and Password is wrong"; 
      }     
    
}         


    else 
    header('location: index.php');   

   
 ?>
         

