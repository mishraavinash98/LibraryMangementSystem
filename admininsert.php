<?php
session_start(); 
require 'newcon.php';

   if (isset($_POST['submit'])) {
  $name=$_POST['name'];              
  $email=$_POST['email'];
  $username =$_POST['username']; 
  $password = $_POST['password'];
	
$query=mysqli_query($link,"INSERT INTO admin_data(name,email,username,password,user_role) 
values('$name','$email','$username','$password',1)");


  
  if(query) {

		echo "<script language='javascript'>
		         alert(' Admin Inserted');
				 window.open('admininsert.php','_self')
				 </script>";
		//header('location:')
		}
		else{
			echo "<script language='javascript'>
		         alert('Some Error Occured');
				 window.open('admininsert.php','_self')
				 </script>";	
		}
 } 
?>  
<script type="text/javascript">

	var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Passwords Match';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Passwords DONT Match';
  }
}

    </script>

<?php include('adminheader.php');?>
    <div class="row">
      <?php include('adminmenu.php'); ?>
      <div class="col-md-9">
        <p class="welcome">Welcome &nbsp;&nbsp;<span style="color:#2484A4;"> <?php echo $_SESSION['username']; ?>  </span></p>
		
        <?php $username=$_SESSION['username'];   ?>
       
            <form class="form-horizontal" role="form" action="admininsert.php" method="POST">
             <div class="form-group">
                <label class="control-label col-sm-2" for="name">Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required>
                </div>
              </div>  
				<div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="email" name="email"  placeholder="Enter Email" required>
                </div>
              </div>			  
                
               
			  <div class="form-group">
                <label class="control-label col-sm-2" for="email">User Name:</label>
                <div class="col-sm-10">
                  <input type="username" class="form-control" id="username" name="username"  placeholder="Enter User Name" required>
                </div>
              </div>
			  
			   <div class="form-group">
                <label class="control-label col-sm-2" for="email">Password :</label>
                <div class="col-sm-10">
                   <input  class="form-control" placeholder="Password" name="password" id="password" type="password" pattern=".{5,12}" required title="5 to 12 characters" onkeyup='check();' required >
                </div>
              </div>
			  <div class="form-group">
                <label class="control-label col-sm-2" for="email">Confirm Password :</label>
                <div class="col-sm-10">
                   <input  class="form-control" placeholder="Confirm Password" name="confirm_password" id="confirm_password" type="password" pattern=".{5,12}" required title="5 to 12 characters"  onkeyup='check();'required > 
				   <span id='message'></span>
                </div>
              </div>
              
             <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default" name="submit">Submit</button>
                </div>    
			</div>
           </form>
        
        
      
    </div>

    
  </div> 
      
  </div> 	
 <?php include('footer.php');?>
