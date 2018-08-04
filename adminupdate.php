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
                 
  $email=$_POST['email'];
  $user =$_POST['username']; 
  $pass = $_POST['password'];

  // Attempt update query execution

$sql = "UPDATE admin_data SET name='$name', email='$email', username='$user', password='$pass' WHERE username='$suser'";

if(mysqli_query($link, $sql)){

    echo "Records were updated successfully.";
    //header("Location:profile.php");

} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

} 

?>
<a href="adminarea.php">Show your profile</a>





