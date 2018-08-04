<?php
session_start();  
?>     
<?php include('adminheader.php');?>
    <div class="row">
     <?php include('adminmenu.php'); ?>
      <div class="col-md-10">
        <p class="welcome">Welcome &nbsp;&nbsp;<span style="color:#2484A4;"> <?php echo $_SESSION['username']; ?>  </span></p>
        <?php $username=$_SESSION['username'];   ?>
       
<br/>
<br/>

            <h2>All Notices</h2>
            <table class="table table-bordered" cellpadding="2" cellspacing="2" border="2">
              <tr>
                <th>Title</th>    
                <th>Notice</th>
                <th>Date of Publish</th>           
                <th>Action</th>                
              </tr>
              <?php
               require 'newcon.php';   //include connection
                $data = mysqli_query($link,"SELECT * FROM notice ORDER BY date_of_publish DESC");  //mysql query for All Notices           
                     if($data === FALSE) { 
                     die(mysqli_error()); // TODO: better error handling
                     }
               while($row = mysqli_fetch_array($data)) {?>
              <tr>
                <?php $id = $row['id']; ?>
                <td><?php echo  $row['title'];?></td>
                <td><?PHP echo  $row['notice']; ?></td>               
                <td><?PHP echo  $row['date_of_publish'];?></td>                
                <td>
                  <a href="deletenotice.php?id=<?php echo $id; ?>">Delete</a>                   
                </td>
                
              </tr>
              <?php } ?>
            </table>
			<h2>Student notice</h2>
            <table class="table table-bordered" cellpadding="2" cellspacing="2" border="2">
              <tr>
                <th>Title</th>    
                <th>Notice</th>
                <th>Date of Publish</th>           
                <th>Action</th>                
              </tr>
              <?php
               require 'newcon.php';   //include connection
                $data = mysqli_query($link,"SELECT * FROM st_notices ORDER BY date_of_publish DESC");      
                     if($data === FALSE) { 
                     die(mysqli_error()); // TODO: better error handling
                     }
               while($row = mysqli_fetch_array($data)) {?>
              <tr>
                <?php $id = $row['id']; ?>
                <td><?php echo  $row['title'];?></td>
                <td><?PHP echo  $row['notice']; ?></td>               
                <td><?PHP echo  $row['date_of_publish'];?></td>                
                <td>
                  <a href="stdeletenotice.php?id=<?php echo $id; ?>">Delete</a>                   
                </td>
                
              </tr>
              <?php } ?>
            </table>
			<h2>Teacher Notices</h2>
            <table class="table table-bordered" cellpadding="2" cellspacing="2" border="2">
              <tr>
                <th>Title</th>    
                <th>Notice</th>
                <th>Date of Publish</th>           
                <th>Action</th>                
              </tr>
              <?php
               require 'newcon.php';   //include connection
                $data = mysqli_query($link,"SELECT * FROM te_notice ORDER BY date_of_publish DESC");  //mysql query for All Notices           
                     if($data === FALSE) { 
                     die(mysql_error()); // TODO: better error handling
                     }
               while($row = mysqli_fetch_array($data)) {?>
              <tr>
                <?php $id = $row['id']; ?>
                <td><?php echo  $row['title'];?></td>
                <td><?PHP echo  $row['notice']; ?></td>               
                <td><?PHP echo  $row['date_of_publish'];?></td>                
                <td>
                  <a href="tedeletenotice.php?id=<?php echo $id; ?>">Delete</a>                   
                </td>
                
              </tr>
              <?php } ?>
            </table>
			
            <p class="margintopbottom"></p>
        
      </div>
    </div>
    
  </div> 
  
 <?php include('footer.php');?>
