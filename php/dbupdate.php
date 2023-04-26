<!--

REFERENCE - I used: campcodes.com. Add, Edit, Delete MySQL Table Rows in PHP | CampCodes. 
			2 Jan. 2021, www.campcodes.com/tutorials/php-tutorials/add-edit-delete-mysql-table-rows-in-php/. 
			Accessed 24 Apr. 2023. for updating an appointment from the database. 

-->

<?php
	include('dbconn.php');
	$id=$_GET['patient_id'];
	
    $day_s=$_POST['day_s'];
	$start_time=$_POST['start_time'];
    $end_time=$_POST['end_time'];
	$patient_id=$_POST['patient_id'];
    $doctor=$_POST['doctor'];
	$reason_for_visit=$_POST['reason_for_visit'];
	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
    $room_number=$_POST['room_number'];
	
	
	mysqli_query($conn,"update `roomschedule` set day_s='$day_s', start_time='$start_time', end_time='$end_time', patient_id='$patient_id', doctor='$doctor', reason_for_visit='$reason_for_visit', first_name='$first_name', last_name='$last_name', room_number='$room_number' where patient_id='$patient_id'");
	echo '<script>alert("Appointment updated")</script>';
	header('location:dbindex.php');
	
?>