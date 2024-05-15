<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
     <h3>All Leave Applications</h3>
     <table class="table" style="background-color:whitesmoke; width: 75vw;">
     	<tr>
     		<th>S.NO</th>
     		<th>User</th>
     		<th>Subject</th>
     		<th>Message</th>
     		<th>Status</th>
     		<th>Action</th>
     	</tr>
        <?php 
            $sno =1;
            $query = "select * from leaves ";
            $query_run = mysqli_query($connection,$query);
            while($row = mysqli_fetch_assoc($query_run)){ 
                ?>
                <tr>
                    <td><?php echo $sno; ?></td>
                    <?php 
                    $query1 = "select name from users where User_ID = $row[User_ID]";
                    $query_run1 = mysqli_query($connection,$query1);
                    while($row1 = mysqli_fetch_assoc($query_run1)){
                        ?>
                        <td><?php echo $row1["name"];?></td>
                        <?php
                    }
                    ?>  
                    <td><?php echo $row['subject']; ?></td>
                    <td><?php echo $row['message']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                    <td><a href="approve_leave.php?id=<?php echo $row['lid'];?>">Approve</a> | <a href="reject_leave.php?id=<?php echo $row['lid'];?>">Reject</a></td>
                </tr>
                <?php
                
            }    
        ?>    
    </table>
</body>
</html>