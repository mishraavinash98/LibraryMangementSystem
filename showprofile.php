<?php 
session_start();                        
?>
<?php include('adminheader.php');?>
    <div class="row">
      <?php include('adminmenu.php'); ?>
      <div class="col-md-9">
       <p class="welcome">Welcome <span style="color:#2484A4;"> <?php echo $_SESSION['username'];    ?>  </span></p>
        <?php $username=$_SESSION['username'];   ?>
       
            <table cellpadding="2" cellspacing="2" border="2" class="table table-bordered">
              <tr>
                <th>Name</th>             
                <th>Email</th>
                <th>Username</th>
                <th>Option</th>
              </tr>
              <?php
               require 'newcon.php';   //include connection
                $data = mysqli_query($link,"Select * from admin_data where username = '$username'");  //mysql query for specific username            
                     if($data === FALSE)  
    die(mysql_error()); // TODO: better error handling

               while($row = mysqli_fetch_array($data)) {?>
              <tr>
                <?php $id = $row['id']; ?>
                <td><?php echo  $row['name'];?></td>
                <td><?PHP echo  $row['email']; ?></td>
                <td><?PHP echo  $row['username'];?></td>
                <td>
                  <a href="adminupdatetest.php?id=<?php echo $id; ?>">Update</a>                   
                </td>
                
              </tr>
              <?php } ?>
  
</table>
        
      </div>
    </div>

    
  </div> 
  
 <?php include('footer.php');
