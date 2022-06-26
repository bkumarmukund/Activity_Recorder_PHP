	
<!DOCTYPE html>
<html lang="en">
<head>
<title>20352014</title>
<meta charset="UTF-8">

<link rel="stylesheet" href="listing.css">
<?php

$search_string = $_POST['activity_date'];

// Create connection
$conn = new mysqli("localhost:3307", "root", "", "20352014_iwtlabendsem");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo '<center>
     <div class="logo">
       <img src="iwtlablogo.jpg">
     </div>';
echo '<center>
     <h3> Search Results by time</h3>';

$sql = "SELECT * FROM activityrecord WHERE activity_date LIKE '$search_string%'";
$result = $conn->query($sql);

if ($result->num_rows > 0){
  while ($row = $result -> fetch_row()) {
    echo '<div class="courses-container">
	<div class="course">
		<div class="actiity_type">
		
			<h6>'.$row[1].'</h6>
			<h2></h2>
			<h6>'.$row[0].'</h6>
		</div>
		<div class="course-info">
			<h6>Activity Description</h6>
			<h4>'.$row[2].'</h4>
		</div>
	</div>
</div>';
	
  }
  $result -> free_result();
}

?>