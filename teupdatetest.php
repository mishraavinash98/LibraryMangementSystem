<?php
  session_start();  
 //require 'newcon.php';
include('adminheader.php');

?>

<div class="row">
      
      <div class="col-md-12">
      
       

<?php 
  require 'newcon.php';
  if(isset($_GET['id']))
  {
  $id=$_GET['id'];
  //$id;
  $getselect=mysqli_query($link,"SELECT * FROM te_registration WHERE id='$id'");
  while($profile=mysqli_fetch_array($getselect))
  {

  		  $name=$profile['name']; 
        $designation= $profile['designation'];
      	$dpt=$profile['dept'];      
       	            
        $email=$profile['email'];
        $user = $profile['username']; 
        $pass = $profile['password']; 

?>
    <form class="form-horizontal" role="form" action="teupdate.php" method="POST">          
              <div class="form-group">
                <label class="control-label col-sm-2" for="name">Name:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="name" id="name" value="<?php echo $name;?>">
                </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-sm-2" for="designation">Select Your Designation</label>
                  <div class="col-sm-10">
                  <select class="form-control" id="designation" name="designation">
                    <option value="<?php echo $designation; ?>"><?php echo $designation; ?></option>
                    <option value="Lecturer">Lecturer</option>
                    <option value="Assistant Professor">Assistant Professor</option>
                     <option value="Assistant Professor">Associate Professor</option>
                    <option value="Professor">Professor</option>


                  </select>
                  </div>
                </div>
              
               <div class="form-group">
                  <label class="control-label col-sm-2" for="dept">Select Department</label>
                  <div class="col-sm-10">
                  <select class="form-control" id="dept" name="dept">
                    <option value="<?php echo $dpt;?>"><?php echo $dpt;?></option>
                    <option value="CSE">Computer Science and Engineering</option>
                    <option value="EEE">Electronics and Electrical Engineering</option>
                    <option value="Civil">Civil Engineering</option>
                    <option value="Mechanical">Mechanical Engineering</option>
                    <option value="Textile Eng">Textile Engineering</option>
                    <option value="English">English</option>
                    <option value="Law">Law and Justice</option>
                    <option value="BBA">Bachelor of Business Administration</option>
                    <option value="MBA">Masters of Business Administration</option>
                    
                  </select>
                  </div>
                </div>
               
              <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="email" name="email" value="<?php echo $email?>">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="email">User Name:</label>
                <div class="col-sm-10">
                  <input type="username" class="form-control" id="username" name="username" value="<?php echo $user;?>">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Password:</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="password" name="password" value="<?php echo $pass;?>">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">                  
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default" name="update">Update</button>
                </div>
              </div>
         </form>

<?php } } ?>
                  
      </div>
    </div> 
  
 <?php include('footer.php');?>

