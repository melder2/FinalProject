<!--

REFERENCE - I used: campcodes.com. Add, Edit, Delete MySQL Table Rows in PHP | CampCodes. 
			2 Jan. 2021, www.campcodes.com/tutorials/php-tutorials/add-edit-delete-mysql-table-rows-in-php/. 
			Accessed 24 Apr. 2023. for connecting to the database. 

-->

<?php
$conn = mysqli_connect("localhost:3307","root","root","mre_database");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>