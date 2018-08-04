<?php
session_start();  
 
require 'newcon.php';

  $currentdate=date("Y-m-d");
  
   if(isset($_POST['submit'])){
     $title=$_POST['title'];   
     $date_of_publish=$_POST['date_of_publish']; 
     $notice=$_POST['notice'];
          
    
     $sql=mysqli_query($link,"INSERT INTO notice (title, notice,date_of_publish)
      values('$title','$notice','$date_of_publish')");

      
	if($sql) {

	echo 'Notice created';


	//header('location:')
	}
	else 
	  echo 'Unexpected error Notice not created';

	 } 

?>


<?php include('adminheader.php');?>
    <div class="row">
      <?php include('adminmenu.php'); ?>
      <div class="col-md-9">
       <p class="welcome"> Welcome &nbsp;&nbsp;  <span style="color:#2484A4;"> <?php echo $_SESSION['username']; ?>  </span></p>

        <?php $username=$_SESSION['username'];   ?>
       
           <form class="form-horizontal" role="form" action="mknotice.php" method="POST">
             <div class="form-group">
                <label class="control-label col-sm-2" for="title">Title:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title">
                </div>
              </div>       
             
               <div class="form-group">
                <label class="control-label col-sm-2" for="notice">Notice:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="notice" name="notice" placeholder="Enter Notice">
                </div>
              </div>
                 
              <input type="hidden" class="form-control" id="date_of_publish" name="date_of_publish" value="<?php echo $currentdate; ?>">        
                
               <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default" name="submit">Submit</button>
                </div>  
              </div>   

           </form>
        
        
      </div>
    </div>

    
  </div> 
  
 <?php include('footer.php');?>
