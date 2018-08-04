<?php

  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

    if (file_exists("image/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "image/" . $_FILES["file"]["name"]);
           $image_path = "image/" . $_FILES["file"]["name"];
           echo $image_path;
		   $name=$_POST['name'];
      }
    }
    
if(!empty($image_path)){
    
    //include("connection.php");
    require 'newcon.php';
    
    //if(mysql_select_db($dbname)){echo "OK";}

$query = mysqli_query($link,"INSERT INTO pdfbooks (img_path,name)
VALUES ('$image_path','$name')");

if ($query) {

  echo "Book Has been Added  <br/>";

}
else
echo "Unexpected Error!! Try Again <br/>";

//    
}     
    
    
?>
<a href="adminarea.php">Back to Dashboard</a>