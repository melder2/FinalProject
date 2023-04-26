<!--

REFERENCE - I used: BoostMyTool. “PHP and MySQL with CRUD Operations: Create, Read, Update, Delete.”
           YouTube, 19 May 2022, www.youtube.com/watch?v=NqP0-UkIQS4. for the layout to connect the php file
           to the datbase and then have the proper format to display the results in different tables. 

-->

<!doctype html>
<html>
    <head>
        <title>Jan 19</title>
    </head>
    
        <h1>January 19</h1>
        <h2>Room 1</h2>
        
        <?php
        $connect = mysqli_connect( 'localhost:3307', 'root', 'root', 'mre_database' );
        
        $query = 'SELECT * FROM roomschedule WHERE day_s=20230119 AND room_number=1 ORDER BY start_time ASC';
        $result = mysqli_query( $connect, $query );

        echo "<table border='2' width='25%'>";
        echo "<tr><td>Date</td><td>StartTime</td><td>EndTime</td><td>PatientID</td><td>Doctor</td><td>Reason</td><td>FirstName</td><td>LastName</td><td>RoomNumber</td></tr>\n";
        
        while( $row = mysqli_fetch_assoc( $result ) )
        {
            echo "<tr><td>{$row['day_s']}</td><td>{$row['start_time']}</td><td>{$row['end_time']}<td>{$row['patient_id']}</td>
            <td>{$row['doctor']}</td><td>{$row['reason_for_visit']}</td><td>{$row['first_name']}</td><td>{$row['last_name']}</td>
            <td>{$row['room_number']}</td></tr>\n";
        }
        
        echo "</table>";
        
        ?>

        <h2>Room 2</h2>
        <?php
        $connect = mysqli_connect( 'localhost:3307', 'root', 'root', 'mre_database' );
        
        $query = 'SELECT * FROM roomschedule WHERE day_s=20230119 AND room_number=2 ORDER BY start_time ASC';
        $result = mysqli_query( $connect, $query );

        echo "<table border='2' width='25%'>";
        echo "<tr><td>Date</td><td>StartTime</td><td>EndTime</td><td>PatientID</td><td>Doctor</td><td>Reason</td><td>FirstName</td><td>LastName</td><td>RoomNumber</td></tr>\n";
        
        while( $row = mysqli_fetch_assoc( $result ) )
        {
            echo "<tr><td>{$row['day_s']}</td><td>{$row['start_time']}</td><td>{$row['end_time']}<td>{$row['patient_id']}</td>
            <td>{$row['doctor']}</td><td>{$row['reason_for_visit']}</td><td>{$row['first_name']}</td><td>{$row['last_name']}</td>
            <td>{$row['room_number']}</td></tr>\n";
        }
        
        echo "</table>";
        
        ?>

        <h2>Room 3</h2>
        <?php
        $connect = mysqli_connect( 'localhost:3307', 'root', 'root', 'mre_database' );
        
        $query = 'SELECT * FROM roomschedule WHERE day_s=20230119 AND room_number=3 ORDER BY start_time ASC';
        $result = mysqli_query( $connect, $query );

        echo "<table border='2' width='25%'>";
        echo "<tr><td>Date</td><td>StartTime</td><td>EndTime</td><td>PatientID</td><td>Doctor</td><td>Reason</td><td>FirstName</td><td>LastName</td><td>RoomNumber</td></tr>\n";
        
        while( $row = mysqli_fetch_assoc( $result ) )
        {
            echo "<tr><td>{$row['day_s']}</td><td>{$row['start_time']}</td><td>{$row['end_time']}<td>{$row['patient_id']}</td>
            <td>{$row['doctor']}</td><td>{$row['reason_for_visit']}</td><td>{$row['first_name']}</td><td>{$row['last_name']}</td>
            <td>{$row['room_number']}</td></tr>\n";
        }
        
        echo "</table>";
        
        ?>

        <h2>Room 4</h2>
        <?php
        $connect = mysqli_connect( 'localhost:3307', 'root', 'root', 'mre_database' );
        
        $query = 'SELECT * FROM roomschedule WHERE day_s=20230119 AND room_number=4 ORDER BY start_time ASC';
        $result = mysqli_query( $connect, $query );

        echo "<table border='2' width='25%'>";
        echo "<tr><td>Date</td><td>StartTime</td><td>EndTime</td><td>PatientID</td><td>Doctor</td><td>Reason</td><td>FirstName</td><td>LastName</td><td>RoomNumber</td></tr>\n";
        
        while( $row = mysqli_fetch_assoc( $result ) )
        {
            echo "<tr><td>{$row['day_s']}</td><td>{$row['start_time']}</td><td>{$row['end_time']}<td>{$row['patient_id']}</td>
            <td>{$row['doctor']}</td><td>{$row['reason_for_visit']}</td><td>{$row['first_name']}</td><td>{$row['last_name']}</td>
            <td>{$row['room_number']}</td></tr>\n";
        }
        
        echo "</table>";
        
        ?>

        <h2>Room 5</h2>
        <?php
        $connect = mysqli_connect( 'localhost:3307', 'root', 'root', 'mre_database' );
        
        $query = 'SELECT * FROM roomschedule WHERE day_s=20230119 AND room_number=5 ORDER BY start_time ASC';
        $result = mysqli_query( $connect, $query );

        echo "<table border='2' width='25%'>";
        echo "<tr><td>Date</td><td>StartTime</td><td>EndTime</td><td>PatientID</td><td>Doctor</td><td>Reason</td><td>FirstName</td><td>LastName</td><td>RoomNumber</td></tr>\n";
        
        while( $row = mysqli_fetch_assoc( $result ) )
        {
            echo "<tr><td>{$row['day_s']}</td><td>{$row['start_time']}</td><td>{$row['end_time']}<td>{$row['patient_id']}</td>
            <td>{$row['doctor']}</td><td>{$row['reason_for_visit']}</td><td>{$row['first_name']}</td><td>{$row['last_name']}</td>
            <td>{$row['room_number']}</td></tr>\n";
        }
        
        echo "</table>";
        
        ?>
        
        <h2>Room 6</h2>
        <?php
        $connect = mysqli_connect( 'localhost:3307', 'root', 'root', 'mre_database' );
        
        $query = 'SELECT * FROM roomschedule WHERE day_s=20230119 AND room_number=6 ORDER BY start_time ASC';
        $result = mysqli_query( $connect, $query );

        echo "<table border='2' width='25%'>";
        echo "<tr><td>Date</td><td>StartTime</td><td>EndTime</td><td>PatientID</td><td>Doctor</td><td>Reason</td><td>FirstName</td><td>LastName</td><td>RoomNumber</td></tr>\n";
        
        while( $row = mysqli_fetch_assoc( $result ) )
        {
            echo "<tr><td>{$row['day_s']}</td><td>{$row['start_time']}</td><td>{$row['end_time']}<td>{$row['patient_id']}</td>
            <td>{$row['doctor']}</td><td>{$row['reason_for_visit']}</td><td>{$row['first_name']}</td><td>{$row['last_name']}</td>
            <td>{$row['room_number']}</td></tr>\n";
        }
        
        echo "</table>";
        
        ?>

    </body>
</html>

