<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Library Management System</title>
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/mystyle.css" rel="stylesheet">


  <script type="text/javascript" src="jquery.min.js">
  
  
  </script>
  <style type="text/css">

        .box{

            padding: 20px;

            display: none;

            margin-top: 20px;

            border: 1px solid #000;
            }   
            .student{display: block;}     

    </style>
  <script type="text/javascript">

   var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Passwords Match';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Passwords DONT Match';
  }
}


    </script>
</head>
<body> 
<div class="container">
  <header class="header">
    <nav class="navbar navbar-default">
      <div class="container-fluid"> 
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand" href="index.php">LIBRARY MANAGEMENT SYSTEM</a> </div>
        
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href=".php">Home</a></li>
            <li><a href="booklist.php">Book List</a></li> 
          </ul>
        </div>
        <!-- /.navbar-collapse --> 
      </div>
      <!-- /.container-fluid --> 
    </nav>
  </header>
  </div>
  <div class="container">
    <div>      

       <p><h1>Sign Up As a</h1></p>
	   <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-left">
            <li><a href="registration.php">Student</a></li>
            <li><a href="teacherregisteration.php">Teacher</a></li> 
          </ul>
        </div>        

     </div>
	
  
    <div class="row">
      <div class="col-md-12">
        <h1 class="regheading">Teacher Registration Form</h1>       

        <form class="form-horizontal" role="form" action="te_insert.php" method="POST">          
              <div class="form-group">
                <label class="control-label col-sm-2" for="name">Name:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" required>
                </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-sm-2" for="designation">Select Your Designation</label>
                  <div class="col-sm-10">
                  <select class="form-control" id="designation" name="designation" required>
                    <option value="select">Select Your Designation</option>
                    <option value="Lecturer">Lecturer</option>
                    <option value="Assistant Professor">Assistant Professor</option>
                     <option value="Assistant Professor">Associate Professor</option>
                    <option value="Professor">Professor</option>                    
                  </select>
                  </div>
                </div>
              
               <div class="form-group">
                  <label class="control-label col-sm-2" for="dept">Select Department</label>
                  <div class="col-sm-10">
                  <select class="form-control" id="dept" name="dept" required>
                    <option value="select">Select Your Department</option>
                    <option value="CSE">Computer Science and Engineering</option>
                    <option value="EEE">Electronics and Electrical Engineering</option>
                    <option value="Civil">Civil Engineering</option>
                    <option value="Mechanical">Mechanical Engineering</option>
                    <option value="Textile Eng">Textile Engineering</option>
                  </select>
                  </div>
                </div>
               
              <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="username">User Name:</label>
                <div class="col-sm-10">
                  <input type="username" class="form-control" id="username" name="username" placeholder="User Name" required>
                </div>
              </div>
             <div class="form-group">
                <label class="control-label col-sm-2" for="email">Password :</label>
                <div class="col-sm-10">
                   <input  class="form-control" placeholder="Password" name="password" id="password" type="password" pattern=".{5,12}" required title="5 to 12 characters" onkeyup='check();' required >
                </div>
              </div>
			  <div class="form-group">
                <label class="control-label col-sm-2" for="email">Confirm Password :</label>
                <div class="col-sm-10">
                   <input  class="form-control" placeholder="Confirm Password" name="confirm_password" id="confirm_password" type="password" pattern=".{5,12}" required title="5 to 12 characters"  onkeyup='check();'required > 
				   <span id='message'></span>
                </div>
              </div>
              
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