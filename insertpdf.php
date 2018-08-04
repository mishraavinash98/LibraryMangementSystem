<?php
session_start();  
?>     
<?php include('adminheader.php');?>
    <div class="row">
      <?php include('adminmenu.php'); ?>
      <div class="col-md-9">
        <p class="welcome">Welcome &nbsp;&nbsp;<span style="color:#2484A4;"> <?php echo $_SESSION['username']; ?>  </span></p>
        <?php $username=$_SESSION['username'];   ?>       
         
             
              <form action="upload.php" method="post" enctype="multipart/form-data">
                  <label for="file">Filename:</label>
                  <input type="file" name="file" id="file"><br>
                  <label>Name</label>
                  <input type="text" name="name" value=""/> 
                  <input type="submit" name="submit" value="Submit">
              </form>
        
        
      </div>
    </div>

    
  </div> 
  
 <?php include('footer.php');?>
