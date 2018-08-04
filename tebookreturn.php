
<?php 
error_reporting(E_PARSE | E_ERROR);
session_start(); 
$username=$_SESSION['username'];

  require 'newcon.php';
  
  $bid =$_GET['bid'];
   $sql=mysqli_query($link,"DELETE FROM borrowers WHERE username = '$username' AND bid='$bid'");

   
	if($sql) {
	echo 'Your Book return is requested. Please return book to Library </br>';
			}

	else {
		
	  echo 'Unexpected error Your Book is not not returned! Try Again!';

	 } 

?>
<a href="teprofile.php">Go Back to Profile</a>
