<?php 
require 'newcon.php';

$name=$_POST['name'];
$stid=$_POST['st_id'];
$dept= $_POST['dept'];
$session=$_POST['session'];
$email=$_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$select=mysqli_query($link,"select * from registration");
  $row=mysqli_fetch_array($select);
  $user=$row['username'];
  if ($user==$_POST['username'])
  {
  	echo "User name is Already Taken";
  }
  else{
  	$stmt=mysqli_query($link,"insert into registration(name, st_id, dept, session, email, username, password) 
		values('$name','$stid','$dept','$session','$email','$username','$password')");
	if(stmt) {

		echo "<script language='javascript'>
		         alert(' Registered As Student');
				 window.open('registration.php','_self')
				 </script>";
		//header('location:')
		}
		else{
			echo "<script language='javascript'>
		         alert('Some Error Occured');
				 window.open('registration.php','_self')
				 </script>";	
		}
		
		
}

?>