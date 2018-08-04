<?php 
  require 'newcon.php';
  if(isset($_GET['id']))
  {
  $id=$_GET['id'];
  $sql = mysqli_query($link,"DELETE FROM te_registration WHERE id = '$id'");

if($sql) {

echo 'Record deleted!';
//header('location:')
}
else
echo "Unexpected Error, Record didn't deleted";

}

?>
<br/>
<a href="adminarea.php">Go Admin area</a>