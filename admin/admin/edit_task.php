<?php 
     include('../includes/connection.php');
     if(isset($_POST['edit_task'])){
        $query ="update tasks set User_ID(null,$_POST[id],description='$_POST[Description]',start_date='$_POST[Start_date]',end_date='$_POST[End_date]' where Task_ID = $_GET[id]";
        $query_run = mysqli_query($connection, $query);
        if($query_run) {
            echo "<script type='text/javascript'>
            alert('Task Updated Successfully...');
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
	<title>ETMS</title>
	<!--jquery file-->
	<script src="../Includes\jquery-jquery-f79d5f1"></script>
	<!--bootstrap files-->
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<script src="../bootstrap/js/bootstrap.min.js"></script>
	<!--External File-->
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
    <!--header codes start here-->
    <div class="row" id="header">
        <div class="col-md-12">
            <h3><i class="fa fa-solid fa-list" style="padding-right: 15px;"></i>Task Management System</h3>
         </div>
        </div>
        <div class="row">
            <div class="col-md-4 m-auto" style="color:white;"><br>
            <h3 style="color:white;">Edit the task</h3><br>
            <?php
                $query = "select * from tasks where Task_ID = $_GET[id]";
                $query_run = mysqli_query($connection,$query);
                while ($row = mysqli_fetch_assoc($query_run)) {
             ?>
            <form action="" method="post">
                <div class="form-group">
                    <input type="hidden" name="id" clasas="form-control" value="" required>
                    </div>
                    <div class="form-group">
                    <label>Select User:</label>
                    <select class="form-control">
                        <option>-Select-</option>
                        <?php
                            include('../includes/connection.php');
                            $query1= "Select User_ID,name from users";
                            $query_run1= mysqli_query($connection,$query1);
                            if(mysqli_num_rows($query_run1)) {   
                                while ($row = mysqli_fetch_assoc($query_run1)) {
                                    ?>
                                    <option value="<?php echo $row['User_ID']; ?>"
                                    ><?php echo $row ['name']; ?></option>
                                    <?php
                                }
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Description:</label>
                    <textarea class="form-control" rows="3" cols="50" name="description" required><?php echo $row['Description']; ?></textarea>
                </div>
                <div class="form-group">
                    <label>Start Date:</label>
                    <input type="date" class="form-control"name="start_date" value="<?php echo $row['Start_date']; ?>" required>
                </div>
                <div class="form-group">
                    <label>End Date</label>
                    <input type="date" class="form-control"name="end_date" value="<?php echo $row['End_date']; ?>" required>
                </div>
                
                <input type="submit" class="btn btn-warning" name="edit_task" value="Update" >
        
            </form>
            <?php 
                }
            ?>    
        </div>
    </div>
</body>
</html>