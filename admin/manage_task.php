 <?php
    include("../includes/connection.php");
?>
<html>
    <body>
        <center><h3>All asigned tasks</h3></center>
        <table class="table" style="background-color: whitesmoke; width:75vw;">
            <tr>
                <th>S.NO</th>
                <th>Task ID</th>
                <th>Description</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            <?php
                $sno = 1;
                $query = "select * from tasks";
                $query_run = mysqli_query($connection, $query);
                while ($row = mysqli_fetch_assoc($query_run)) {
                    ?>
                    <tr>
                        <td><?php echo $sno; ?></td>
                        <td><?php echo $row['Task_ID']; ?></td>
                        <td><?php echo $row['Description']; ?></td>
                        <td><?php echo $row['Start_date'];?></td>
                        <td><?php echo $row ['End_date'];?></td>
                        <td><?php echo $row ['status'];?></td>
                        <td><a href="edit_task.php?id=<<?php echo $row['Task_ID']; ?>">Edit</a> | 
                        <a href="delete_task.php?id=<<?php echo $row['Task_ID']; ?>">Delete</a></td>
                    </tr>
                    <?php
                    $sno = $sno + 1;
                }
            ?>        
        </table>    
    </body>
</html>    