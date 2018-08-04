		<?php 
session_start();
?>
<?php include('adminheader.php');?>

    <div class="row">
      
      <?php include ('stmenu.php');?>
	  
      <div class="col-md-10">
      <p class="welcome">Welcome <span style="color:#2484A4;"> <?php echo $_SESSION['username'];    ?>  </span></p>
        <?php $username=$_SESSION['username'];   ?>

       

         <h1>My Profile</h1>

            <table cellpadding="2" cellspacing="2" border="2" class="table table-bordered">
              <tr>
                <th>Name</th>    
                <th>Student ID</th>
                <th>Department</th>
                <th>Session</th>
                <th>Email</th>
                <th>Username</th>
                <th>Option</th>
              </tr>
              <?php
               require 'newcon.php';   //include connection
                $data = mysqli_query($link,"Select * from registration where username = '$username'");  //mysql query for specific username            
                     if($data === FALSE) { 
    die(mysqli_error()); // TODO: better error handling
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
                 <a href="updatetest.php?id=<?php echo $id; ?>">Update</a>               
                </td>
                
              </tr>
              <?php } ?>
  
</table>

<p></p>
<p></p>
<p></p>
<h1>My Notices</h1>

   <table cellpadding="2" cellspacing="2" border="2" class="table table-bordered">
              <tr>               
                <th>Title</th>    
                <th>Date of Publish</th>
                <th>Notice</th>
                <th>Fine (TK)</th>
                <th>Last Date</th>                
              </tr>
              <?php
               require 'newcon.php';   //include connection
                $data = mysqli_query($link,"SELECT * FROM st_notices WHERE id = '$id'");  //mysql query for specific username            
                     if($data === FALSE) { 
          die(mysql_error()); // TODO: better error handling
        }
               while($row = mysqli_fetch_array($data)) {?>
              <tr>               
                
                <td><?PHP echo  $row['title']; ?></td> 
                <td><?php echo  $row['date_of_publish'];?></td>
                <td><?PHP echo  $row['notice']; ?></td>                
                <td><?PHP echo  $row['fine']; ?></td>
                <td><?PHP echo  $row['last_date'];?></td>
                                
              </tr>
              <?php } ?>
  
        </table>    
<h1>Books Issued</h1>

   <table cellpadding="2" cellspacing="2" border="2" class="table table-bordered">
              <tr>               
                <th>Name</th>    
                <th>Author</th>
                <th>Date Taken</th>
                <th>Edition</th>
                <th>ISBN</th>   
				<th>Option</th> 
              </tr>
              <?php
               require 'newcon.php';   //include connection
                $data = mysqli_query($link,"SELECT bid,booklist.name,booklist.Author,borrowers.date_of_taken,booklist.Edition,booklist.ISBN FROM borrowers,booklist WHERE borrowers.isbn = booklist.ISBN and  borrowers.username = '$username'");
                     if($data === FALSE) { 
          die(mysql_error()); // TODO: better error handling
        }
               while($row = mysqli_fetch_array($data)) {?>
              <tr>               
                <?php $bid = $row['bid']; ?>
                <td><?PHP echo  $row['name']; ?></td> 
                <td><?php echo  $row['Author'];?></td>
                <td><?PHP echo  $row['date_of_taken']; ?></td>                
                <td><?PHP echo  $row['Edition']; ?></td>
                <td><?PHP echo  $row['ISBN'];?></td>
                <td>                 
                 <a href="bookreturn.php?bid=<?php echo $bid; ?>">Returnbook</a>               
                </td>
                              
              </tr>
              <?php } ?>
  
        </table>    
		<h1>Book History</h1>

   <table cellpadding="2" cellspacing="2" border="2" class="table table-bordered">
              <tr>               
                <th>Name</th>    
                <th>Author</th>
                <th>Date Taken</th>
                <th>Edition</th>
                <th>ISBN</th>    
              </tr>
              <?php
               require 'newcon.php';   //include connection
                $data = mysqli_query($link,"SELECT bid,booklist.name,booklist.Author,bookhistory.date_of_taken,booklist.Edition,booklist.ISBN FROM bookhistory,booklist WHERE bookhistory.isbn = booklist.ISBN and  bookhistory.username = '$username'");
                     if($data === FALSE) { 
          die(mysql_error()); // TODO: better error handling
        }
               while($row = mysqli_fetch_array($data)) {?>
              <tr>               
                <?php $bid = $row['bid']; ?>
                <td><?PHP echo  $row['name']; ?></td> 
                <td><?php echo  $row['Author'];?></td>
                <td><?PHP echo  $row['date_of_taken']; ?></td>                
                <td><?PHP echo  $row['Edition']; ?></td>
                <td><?PHP echo  $row['ISBN'];?></td>
                
                              
              </tr>
              <?php } ?>
  
        </table>
        
      </div>
    </div>

    
  </div> 
  
 <?php include('footer.php');?>