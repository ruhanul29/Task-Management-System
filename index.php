<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Task Management System</title>
	<!--jquery file-->
	<script src="Includes\jquery-jquery-f79d5f1"></script>
	<!--bootstrap files-->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<!--External File-->
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
     <div class="row">
         <div class="col-md-4" id="home_page">
     	   <center><h3>Choose Login Role?</h3></center><br>
     	 <center> 
		 <a href="user_login.php">
		 <button type="button" style="margin: 0px; background-color: green;color:white;"> User Login </button>
         </a>
		 
		 <a href="register.php">
		 <button type="button" style="margin: 20px; background-color: orange;color:black;"> User Registration </button>
         </a>
		 
		 <a href="admin/admin_login.php">
		 <button type="button" style="background-color: blue;color:white;">Admin Login</button>
         </a>
		 </center>
        </div>
    </div>
</body>
</html>
