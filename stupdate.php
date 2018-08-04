<?php
session_start();
//require 'newcon.php';
$link = mysqli_connect("localhost", "root", "","library");
$suser=$_SESSION['username']; 
echo "<br>";
echo $suser;
  //$id=$_GET['id'];
  //if(isset($_POST['update']))
  //{
  $name=$_POST['name'];
  $stid=$_POST['st_id'];  
  $dpt=$_POST['dept'];              
  $session= $_POST['session'];                
  $email=$_POST['email'];
  $user =$_POST['username']; 
  $pass = $_POST['password'];

  // Attempt update query execution

$sql = "UPDATE registration SET name='$name', st_id='$stid', dept='$dpt', session='$session', email='$email', username='$user', password='$pass' WHERE username='$suser'";

if(mysqli_query($link, $sql)){

    echo " Records were updated successfully.";
    //header("Location:profile.php");

} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

} 

?>
<a href="profile.php">Show your profile</a>





