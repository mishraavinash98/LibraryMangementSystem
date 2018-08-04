<?php 
error_reporting(E_PARSE | E_ERROR);
session_start(); 
$username=$_SESSION['username'];
  $bid =$_GET['id'];
  
  require 'newcon.php';
  //$idnew=0;
  $idnew =$_GET['id'];
  $currentdate=date("Y-m-d");
  
  $select= mysqli_query($link,"select * from booklist where id = '$idnew'");
  $row=mysqli_fetch_array($select);
  $isbn=$row['ISBN'];
	
  
   $sql=mysqli_query($link,"INSERT INTO borrowers (username, date_of_taken,isbn,bid)
      values('$username','$currentdate','$isbn','$bid')");

      
   $cmd=mysqli_query($link,"INSERT INTO bookhistory (username, date_of_taken,isbn,bid)
      values('$username','$currentdate','$isbn','$bid')");

if($sql) {
echo 'Your Book is booked. Please collect from Library</br>';
		}

else {
	
  echo 'Unexpected error Your Book is not booked! Try Again!</br>';

 } 

?>
<a href="profile.php">Go Back</a>