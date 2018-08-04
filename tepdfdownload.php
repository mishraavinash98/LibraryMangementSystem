<?php 
session_start();
?>
<?php include('adminheader.php');?>

    <div class="row">
      
      <?php include ('temenu.php');?>
      <div class="col-md-10">
      <p class="welcome">Welcome <span style="color:#2484A4;"> <?php echo $_SESSION['username'];    ?>  </span></p>
        <?php $username=$_SESSION['username'];   ?>

       

         <h1>All PDF Books</h1>

            <table cellpadding="2" cellspacing="2" border="2" class="table table-bordered">
              <tr>
                <th>Name</th>    
                <th>Download Link</th>                
              </tr>
              <?php
               require 'newcon.php';   //include connection
                $data = mysqli_query($link,"Select * from pdfbooks");  //mysql query for All PDF books            
                     if($data === FALSE) { 
				die(mysql_error()); // TODO: better error handling
}
               while($row = mysqli_fetch_array($data)) {?>
              <tr>
                
                <td><?php echo  $row['name'];?></td>
                <td><a href="<?PHP echo  $row['img_path']; ?>">Download</a></td>
                       
                
                
              </tr>
              <?php } ?>
  
            </table>

   
        
      </div>
    </div>

    
  </div> 
  
 <?php include('footer.php');?>