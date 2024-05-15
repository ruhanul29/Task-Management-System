<?php
    session_start();
    include('../includes/connection.php');
    if(isset($_POST['create_task'])) {
	     $query ="insert into tasks values(null,'$_POST[Task_ID]','$_POST[Description]',$_POST[Start_date],'$_POST[End_date],'Not Started')";
	     $query_run = mysqli_query($connection, $query);
	     if($query_run) {
		     echo "<script type='text/javascript'>
		     alert('Task Created Successfully...');
			 window.location.href = 'admin_dashboard.php';
		      </script>
		      ";
	    }
	    else{
		    echo "<script type='text/javascript'>
		    alert ('Error!PLease Try Again.');
		    window.location.href = 'admin_dashboard.php';
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
	<title>Admin Dashboard</title>
		<!--jquery file-->
		<script src="../Includes\jquery-jquery-f79d5f1"></script>
	<!--bootstrap files-->
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<script src="../bootstrap/js/bootstrap.min.js"></script>
	<!--External File-->
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
	<!--jquery code-->
	<script type="text/javascript">
		$(document).ready(function(){
			$("#view_leave").click(function(){
				$("#right_sidebar").load("view_leave.php");
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
				    <a href="admin_dashboard.php"type="button" id="logout_link">Dashboard</a>
				</td>
			</tr>
			<tr>
				<td style="text-align:center;">
				    <a href="create_task.php" type="button" id="logout_link">Create Task</a>
				</td>
			</tr>
			<tr>
				<td style="text-align:center;">
				    <a href="manage_task.php"type="button" id="logout_link">Manage Task</a>
				</td>
			</tr>
			<tr>
				<td style="text-align:center;">
				    <a href="view_leave.php"type="button" class="link" id="view_leave">Leave Application</a>
				</td>
			</tr>
			<tr>
				<td style="text-align:center;">
				    <a href="../logout.php"type="button" id="logout_link">Logout</a>
				</td>
			</tr>
		</table>
	</div>
	<div class="col-md-10" id="right_sidebar">
		<h4>Instruction for Admins</h4>
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