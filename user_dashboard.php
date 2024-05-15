 <?php 
   session_start();
   if (isset($_SESSION["email"])) {
   include("includes/connection.php");
   if(isset($_POST['submit_leave'])){
	$query = "insert into leaves values (null,$_SESSION[User_ID],'$_POST[subjecct]','$_POST[message]','No Action')";
    $query_run = mysqli_query($connection, $query);
        if($query_run) {
            echo "<script type='text/javascript'>
            alert('Form Submitted Successfully...');
            window.location.href = 'user_dashboard.php';
             </script>
             ";
       }
       else{
           echo "<script type='text/javascript'>
           alert ('Error!PLease Try Again.');
           window.location.href = 'user_dashboard.php';
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
	<title>User Dashboard</title>
		<!--jquery file-->
		<script src="Includes\jquery-jquery-f79d5f1"></script>
	<!--bootstrap files-->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<!--External File-->
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<script type="text/javascript">
	    $(document).ready(function(){
			$("#manage_task").click(function(){
				$("#right_sidebar").load("task.php");
		});
	});
	  
	$(document).ready(function(){
			$("#apply_leave").click(function(){
				$("#right_sidebar").load("leaveForm.php");
		});
	});	
</script>
</head>
<body>
	<!--header code start here -->
	<div class="row" id="header">
		<div class="col-md-12">
			<div class="col-md-4" style="display: inline-block;">
			    <h3>Task Mangement System</h3>
			</div>
			<div class="col-md-6" style="display: inline-block;text-align: right;">
			    <span style="margin-left: 470px;margin-right:25px;"><b>Email: </b> <?php echo $_SESSION['email'];?></span>
				<span style="margin-left:25px;"><b>Name: </b><?php echo $_SESSION['name'];?></span>
			</div>	
		</div>
	</div>
	<!--Header codes end here-->
	<div class="row">
		<div class="col-md-2" id="left_sidebar">
			<table class="table">
			<tr>
				<td style="text-align:center;">
				    <a href="user_dashboard.php"type="button" id="logout_link">Dashboard</a>
				</td>
			</tr>
			<tr>
				<td style="text-align:center;">
				    <a href="task.php" type="button" class="link" id="manage_task">Update Task</a>
				</td>
			</tr>
			<tr>
				<td style="text-align:center;">
				    <a href="leaveForm.php"type="button" class="link" id="apply_leave">Apply Leave</a>
				</td>
			</tr>
			<tr>
				<td style="text-align:center;">
				    <a href="leave_status.php"type="button" id="logout_link">Leave Status</a>
				</td>
			</tr>
			<tr>
				<td style="text-align:center;">
				    <a href="logout.php"type="button" id="logout_link">Logout</a>
				</td>
			</tr>
		</table>
	</div>
	<div class="col-md-10" id="right_sidebar">
		<h4>Instruction for Employees</h4>
		<ul style="line-height: 2em; font-size: 1.2em; list-style-type: none;">
		    <li>1.All the employee should mark their attendance daily.</li>
			<li>2.Everyone must complete the task assigned to them.</li>
			<li>3.Kindly maintain decorum of the office.</li>
			<li>4.Keep office and your area neat and clean.</li>
		</ul>
	</div>
</div>
</body>
</html>
<?php 
   }
   else{
	header('Location:user_login.php');
   }