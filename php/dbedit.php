<!--

REFERENCE - I used: campcodes.com. Add, Edit, Delete MySQL Table Rows in PHP | CampCodes. 
			2 Jan. 2021, www.campcodes.com/tutorials/php-tutorials/add-edit-delete-mysql-table-rows-in-php/. 
			Accessed 24 Apr. 2023. for editing an appointment from the database. 

-->

<?php
	include('conn.php');
	$id=$_GET['patient_id'];
	$query=mysqli_query($conn,"select * from `roomschedule` where patient_id='$patient_id'");
	$row=mysqli_fetch_array($query);
	
?>
<!DOCTYPE html>
<html>
<head>
<title>Edit Database</title>
</head>
<body>
	<h2>Edit</h2>
	<form method="POST" action="dbupdate.php?id=<?php echo $id; ?>">
        
        <label>Date:</label><input type="text" value="<?php echo $row['day_s']; ?>" name="day_s">
		<label>Start Time:</label><input type="text" value="<?php echo $row['start_time']; ?>" name="start_time">
        <label>End Time:</label><input type="text" value="<?php echo $row['end_time']; ?>" name="end_time">
		<label>Patient ID:</label><input type="text" value="<?php echo $row['patient_id']; ?>" name="patient_id">
        <label>Doctor:</label><input type="text" value="<?php echo $row['doctor']; ?>" name="doctor">
		<label>Reason:</label><input type="text" value="<?php echo $row['reason_for_visit']; ?>" name="reason_for_visit"><br>
        <label>Firstname:</label><input type="text" value="<?php echo $row['first_name']; ?>" name="first_name">
		<label>Lastname:</label><input type="text" value="<?php echo $row['last_name']; ?>" name="last_name">
        <label>Room Number:</label><input type="text" value="<?php echo $row['room_number']; ?>" name="room_number">
		
		<input type="submit" name="submit">
		
	</form>
</body>
</html>