<!--

REFERENCE - I used: campcodes.com. Add, Edit, Delete MySQL Table Rows in PHP | CampCodes. 
			2 Jan. 2021, www.campcodes.com/tutorials/php-tutorials/add-edit-delete-mysql-table-rows-in-php/. 
			Accessed 24 Apr. 2023. for deleting an appointment from the database. 

-->

<?php
	$id=$_GET['id'];
	include('dbconn.php');
	mysqli_query($conn,"delete from `roomschedule` where patient_id='$id'");
	header('location:dbindex.php');
	
?>

