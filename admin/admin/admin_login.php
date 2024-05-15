<?php
session_start();
    include('../includes/connection.php');
    if(isset($_POST['adminLogin'])) {
	     $query = "select email,password,name from admin where email = '$_POST[email]' AND password = '$_POST[password]'";
	     $query_run = mysqli_query($connection,$query);
	     if(mysqli_num_rows($query_run)) {
			while($row = mysqli_fetch_assoc($query_run)) {
				$_SESSION['email'] = $row['email'];
				$_SESSION['name'] = $row['name'];
			}
			 echo "<script type='text/javascript'>
		      window.location.href = 'admin_dashboard.php';
		      </script>
		      ";
	    }
	    else{
		    echo "<script type='text/javascript'>
		    alert ('Please enter correct information.');
		    window.location.href = 'admin_login.php';
		    </script>
		    ";
	    }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Task Management System| Admin Login Page</title>
	<!--jquery file-->
	<script src="../Includes\jquery-jquery-f79d5f1"></script>
	<!--bootstrap files-->
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<script src="../bootstrap/js/bootstrap.min.js"></script>
	<!--External File-->
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
     <div class="row">
         <div class="col-md-3 m-auto" id="login_home_page">
     	  <center><h3 style="background-color: #5A8F7B;padding: 5px; width: 15vw;">Admin Login</h3></center>
     	   <form action="" method="post">
     	      <div class="form-group">
     	      	<input type="email" name="email" class="form-control" placeholder="Enter Email"required>
     	      </div>

     	      <div class="form-group">
     	      	<input type="password" name="password" class="form-control" placeholder="Enter Password"required>
     	      </div>

     	      <div class="form-group">
     	      	<input type="submit" name="adminLogin" class="form-control" value="Login" class="btn btn-warning">
     	      </div>
     	  </form>
          <center><a href="../index.php"class="btn btn-danger">Go to Home</a></center>
     	 </div>
    </div>
</body>
</html>
