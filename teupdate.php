<?php
session_start();
//require 'newcon.php';
$link = mysqli_connect("localhost", "root", "","library");
//echo "connection is ok";
$suser=$_SESSION['username']; 
echo "<br>";
//echo $suser;
  //$id=$_GET['id'];
  //if(isset($_POST['update']))
  //{
  $name=$_POST['name'];
  $designation=$_POST['designation'];  
  $dpt=$_POST['dept'];             
                 
  $email=$_POST['email'];
  $user =$_POST['username']; 
  $pass = $_POST['password'];

  // Attempt update query execution

$sql = "UPDATE te_registration SET name='$name', designation='$designation', dept='$dpt', email='$email', username='$user', password='$pass' WHERE username='$suser'";

if(mysqli_query($link, $sql)){

    echo "Records were updated successfully.";
    //header("Location:profile.php");

} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

} 

?>
<a href="teprofile.php">Show your profile</a>





