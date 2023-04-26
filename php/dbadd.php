<!--

REFERENCE - I used: campcodes.com. Add, Edit, Delete MySQL Table Rows in PHP | CampCodes. 
			2 Jan. 2021, www.campcodes.com/tutorials/php-tutorials/add-edit-delete-mysql-table-rows-in-php/. 
			Accessed 24 Apr. 2023. for adding an appointment to the database. 

-->

<?php
	include('dbconn.php');
	
    $day_s=$_POST['day_s'];
	$start_time=$_POST['start_time'];
    $end_time=$_POST['end_time'];
	$patient_id=$_POST['patient_id'];
    $doctor=$_POST['doctor'];
	$reason_for_visit=$_POST['reason_for_visit'];
    $first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
    $room_number=$_POST['room_number'];
	
	
		
	mysqli_query($conn,"insert into `roomschedule` (day_s,start_time,end_time,patient_id,doctor,reason_for_visit,first_name,last_name,room_number) values ('$day_s','$start_time','$end_time','$patient_id','$doctor','$reason_for_visit','$first_name','$last_name','$room_number')");
	header('location:dbindex.php');

	echo "Appointment Added"
	
?>