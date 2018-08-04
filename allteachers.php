<?php
session_start();  
?>     

<?php include('adminheader.php');?>
    <div class="row">
      <?php include('adminmenu.php'); ?>
      <div class="col-md-10">
        <p class="welcome">Welcome &nbsp;&nbsp;<span style="color:#2484A4;"> <?php echo $_SESSION['username']; ?>  </span></p>
        <?php $username=$_SESSION['username'];   ?>

                   
            <table cellpadding="2" cellspacing="2" border="2" class="table table-bordered">
              <tr>
                <th>Name</th>    
                <th>Designation</th>
                <th>Department</th>               
                <th>Email</th>
                <th>Username</th>
                <th>Action</th>                
              </tr>
              <?php
               require 'newcon.php';   //include connection
                $data = mysqli_query($link,"SELECT id, name,designation,dept, email, username FROM te_registration");  //mysql query for student borrowers           
                     if($data === FALSE) { 
                     die(mysql_error()); // TODO: better error handling
                     }
               while($row = mysqli_fetch_array($data)) {?>
              <tr>
                <?php $id = $row['id']; ?>
                <td><?php echo  $row['name'];?></td>
                <td><?PHP echo  $row['designation']; ?></td> 
                <td><?php echo  $row['dept'];?></td>                               
                <td><?PHP echo  $row['email']; ?></td>
                <td><?PHP echo  $row['username'];?></td>               
                <td>
                  <a href="deleteteachers.php?id=<?php echo $id; ?>">Delete</a>                    
                </td>
                
              </tr>
              <?php } ?>
            </table>
           


      <!--
        <form class="form-horizontal" role="form" action="st_insert.php" method="POST">          
              <div class="form-group">
                <label class="control-label col-sm-2" for="name">Name:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
                </div>
              </div>         
                                         
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default" name="submit">Submit</button>
                </div>
              </div>
         </form>       
        -->
        
      </div>
    </div>
    
  </div> 
  
 <?php include('footer.php');?>
