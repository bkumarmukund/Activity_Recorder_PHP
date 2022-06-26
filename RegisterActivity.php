<?php	
    $con=mysqli_connect("localhost:3307", "root", "", "20352014_iwtlabendsem");
    $datefinal = $_POST["activity_date"];
	$date = date('Y-m-d H:i:s', strtotime($datefinal));
    $sql="INSERT INTO activityrecord (activity_date, activity_type, activity_description)
    VALUES
    ('$date','$_POST[activity_type]','$_POST[activity_description]')";
	if(mysqli_query($con, $sql)){
    echo '<script>alert("Activity successfully saved")</script>';
	} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
	// Close connection
	mysqli_close($con);
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Returning to main window');
    window.location.href='http://localhost/20352014_iwtlab/search-form.php';
    </script>");
	die();
?>