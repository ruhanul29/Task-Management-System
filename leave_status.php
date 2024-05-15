<?php 
    session_start();
    if (isset($_SESSION["email"])) {
    include("includes/connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
     <center><h3>Your Leave Application</h3></center><br>
     <table class="table" style="background-color:whitesmoke; width: 75vw;">
     	<tr>
     		<th>S.No</th>
     		<th>Subject</th>
     		<th>Message</th>
     		<th>Status</th>
     	</tr>
     	<?php 
            $sno =1;        
            $query1 = "select * from leaves where User_ID = $_SESSION[User_ID]";
            $query_run1 = mysqli_query($connection,$query);
            while($row1 = mysqli_fetch_assoc($query_run)){
                ?>
                <tr>
                	<td><?php echo $sno; ?></td>
                	<td><?php echo $row['subject']; ?></td>
                	<td><?php echo $row['meassage']; ?></td>
                	<td><?php echo $row['status']; ?></td>
                </tr>
                <?php 
                $sno = $sno +1 ;
             }
         ?>           
     </table>
</body>
</html>
<?php 
}
 else{
    header('Location:user_login');
 }