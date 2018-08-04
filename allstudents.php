<?php
session_start();  
?>     
<?php include('adminheader.php');?>
    <div class="row">
      <?php include('adminmenu.php'); ?>
      <div class="col-md-10">
        <p class="welcome">Welcome &nbsp;&nbsp;<span style="color:#2484A4;"> <?php echo $_SESSION['username']; ?>  </span></p>
        <?php $username=$_SESSION['username'];   ?>

       <p>All Student</p>
        <table cellpadding="2" cellspacing="2" border="2" class="table table-bordered">
              <tr>
                <th>Name</th>    
                <th>Student ID</th>
                <th>Department</th>
                <th>Session</th>
                <th>Email</th>
                <th>Username</th>               
                <th>Action</th>                
              </tr>
              
              <?php
               require 'newcon.php';   //include connection
                $data = mysqli_query($link,"SELECT id, name, st_id,dept, session, email, username FROM registration");  //mysql query for student borrowers           
                     if($data === FALSE) { 
                     die(mysql_error()); // TODO: better error handling
                     }
               while($row = mysqli_fetch_array($data)) {?>
              <tr>
                <?php $id = $row['id']; ?>
                <td><?php echo  $row['name'];?></td>
                <td><?PHP echo  $row['st_id']; ?></td> 
                <td><?php echo  $row['dept'];?></td>
                <td><?PHP echo  $row['session']; ?></td>                
                <td><?PHP echo  $row['email']; ?></td>
                <td><?PHP echo  $row['username'];?></td>                
                <td>
                  <a href="deletestudents.php?id=<?php echo $id ?>">Delete</a>
                  
                </td>
                
              </tr>
              <?php } ?>
            </table>

            

        
      </div>
    </div>
    
  </div> 
  
 <?php include('footer.php');?>
