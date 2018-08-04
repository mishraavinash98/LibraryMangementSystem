<?php 
  require 'newcon.php';
  if(isset($_GET['id']))
  {
  $id=$_GET['id'];
  //echo $id;
  //$getselect=mysql_query("SELECT * FROM registration WHERE id='$id'");
  $sql = mysqli_query($link,"DELETE FROM te_notice WHERE id = '$id'");

if($sql) {

echo 'Record deleted!';
//header('location:')
}
else
echo "Unexpected Error, Record didn't deleted";

}

?>
<a href="adminarea.php">Go Admin area</a>