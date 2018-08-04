<?php
error_reporting(E_PARSE | E_ERROR);
session_start(); 
  require 'newcon.php';
  //$idnew=0;
  $idnew =$_GET['id'];
   $idnew;  
  
  $select= mysqli_query($link,"select * from registration where id = '$idnew'");
  $row=mysqli_fetch_array($select);
  $row['username'];
  $currentdate=date("Y-m-d");
  //echo   $currentdate;

   if(isset($_POST['submit'])){
     $title=$_POST['title'];
     //echo $title;
     $date_of_publish=$_POST['date_of_publish'];
     // echo $date_of_publish;
     $notice=$_POST['notice'];
     //echo $notice; 
     $fine=$_POST['fine'];
     //echo $fine; 
     $last_date=$_POST['last_date'];  
     //echo $last_date;
     $id = $_POST['userid'];
     $sql=mysqli_query($link,"INSERT INTO st_notices (id, title, date_of_publish, notice, fine, last_date)
      values('$id','$title','$date_of_publish','$notice','$fine','$last_date')");

      
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
      <div class="col-md-10">
       <p class="welcome"> Welcome &nbsp;&nbsp;  <span style="color:#2484A4;"> <?php echo $_SESSION['username']; ?>  </span></p>

        <?php $username=$_SESSION['username'];   ?>
       
           <form class="form-horizontal" role="form" action="st_mknotice.php" method="POST">
             <div class="form-group">
                <label class="control-label col-sm-2" for="title">Title:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title">
                </div>
              </div>
               
                  <input type="hidden" class="form-control" id="date_of_publish" name="date_of_publish" value="<?php echo $currentdate; ?>">
                
             
               <div class="form-group">
                <label class="control-label col-sm-2" for="notice">Notice:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="notice" name="notice" placeholder="Enter Notice">
                </div>
              </div>
               <div class="form-group">
                <label class="control-label col-sm-2" for="email">Fine:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="fine" name="fine" placeholder="Enter Fine">
                </div>
              </div>
               <div class="form-group">
                <label class="control-label col-sm-2" for="last_date">Last Date:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="last_date" name="last_date" placeholder="Enter Last Date">
                </div>
              </div>

                <input type="hidden" class="form-control" id="userid" name="userid" value="<?php echo $idnew ;?>">
              
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default" name="submit">Submit</button>
                </div>     

           </form>
        
        </div>
    </div>

    
  </div> 
  
 <?php include('footer.php');?>
