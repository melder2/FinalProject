<!--

REFERENCE - I used: BoostMyTool. “PHP and MySQL with CRUD Operations: Create, Read, Update, Delete.”
           YouTube, 19 May 2022, www.youtube.com/watch?v=NqP0-UkIQS4. for the layout to connect the php file
           to the datbase and then have the proper format to display the results in different tables. 

-->

<!DOCTYPE html>
<html>
<head>
<title>All Appointments</title>
</head>
<body>
	<div>
		<form method="POST" action="dbadd.php">
            
            <label>Date:</label><input type="text" value="<?php echo $row['day_s']; ?>" name="day_s">
            <label>Start Time:</label><input type="text" value="<?php echo $row['start_time']; ?>" name="start_time">
            <label>End Time:</label><input type="text" value="<?php echo $row['end_time']; ?>" name="end_time"><br>
            <label>Patient ID:</label><input type="text" value="<?php echo $row['patient_id']; ?>" name="patient_id">
            <label>Doctor:</label><input type="text" value="<?php echo $row['doctor']; ?>" name="doctor">
            <label>Reason:</label><input type="text" value="<?php echo $row['reason_for_visit']; ?>" name="reason_for_visit"><br>
            <label>First Name:</label><input type="text" value="<?php echo $row['first_name']; ?>" name="first_name">
            <label>Lastname:</label><input type="text" value="<?php echo $row['last_name']; ?>" name="last_name">
            <label>Room Number:</label><input type="text" value="<?php echo $row['room_number']; ?>" name="room_number"><br>

			<input type="submit" name="dbadd">
            <a href="http://localhost:81/janweek3.php">Previous Week</a>
            <a href="http://localhost:81/janweek5.php">Next Week</a>
		</form>
	</div>
	<br>
	<div>
		<table border="1">
			<thead>
				<th>Date</th>
				<th>Start Time</th>
                <th>End Time</th>
				<th>Patient ID</th>
                <th>Doctor</th>
				<th>Reason for visit</th>
                <th>First Name</th>
				<th>Last Name</th>
                <th>Room Number</th>
				<th>Actions</th>
				
			</thead>
			<tbody>
				<?php
					include('dbconn.php');
					$query=mysqli_query($conn,"select * from `roomschedule` WHERE day_s BETWEEN '2023-01-23' AND '2023-01-27' ORDER BY day_s, room_number");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
                            <td><?php echo $row['day_s']; ?></td>
                            <td><?php echo $row['start_time']; ?></td>
							<td><?php echo $row['end_time']; ?></td>
                            <td><?php echo $row['patient_id']; ?></td>
							<td><?php echo $row['doctor']; ?></td>
                            <td><?php echo $row['reason_for_visit']; ?></td>
                            <td><?php echo $row['first_name']; ?></td>
							<td><?php echo $row['last_name']; ?></td>
                            <td><?php echo $row['room_number']; ?></td>
							<td>
								<a href="dbedit.php?id=<?php echo $row['patient_id']; ?>">Edit</a>
								<a href="dbeditfordelete.php?id=<?php echo $row['patient_id']; ?>">Delete</a>
                             
							</td>
                            
						</tr>
                        
                       
						<?php
						
					}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>