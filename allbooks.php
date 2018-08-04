<?php
session_start();  
?>     
<?php include('adminheader.php');?>
    <div class="row">
     <?php include('adminmenu.php'); ?>
      <div class="col-md-10">
        <p class="welcome">Welcome &nbsp;&nbsp;<span style="color:#2484A4;"> <?php echo $_SESSION['username']; ?>  </span></p>
        <?php $username=$_SESSION['username'];   ?>


       <p>All Books present </p>
	   <table cellpadding="2" cellspacing="2" border="2" class="table table-bordered">
              <tr>
                <th>Name</th>             
                <th>Authors/Author</th>
                <th>Edition</th>                
              </tr>
            <?php
               require 'newcon.php';   //include connection
                $data = mysqli_query($link,"Select * from booklist;");  //mysql query for data            
                     if($data === FALSE) { 
                  die(mysql_error()); // TODO: better error handling
                }
               while($row = mysqli_fetch_array($data)) {?>
               <?php $id = $row['id']; ?>
                <tr>  

                <td><?php echo  $row['name'];?></td>
                <td><?PHP echo  $row['Author']; ?></td>
                <td><?PHP echo  $row['Edition'];?></td>
               
                
              </tr>
              <?php } ?>
  
			</table>
<br/>
<br/>
        
      </div>
    </div>
    
  </div> 
  
 <?php include('footer.php');?>
