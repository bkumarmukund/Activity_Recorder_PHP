<!DOCTYPE html>
<html lang="en">
<head>
<title>20352014</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="iwtlabexamstyle.css">
</head>

<body>
<center>
    <div class="logo">
      <img src="iwtlablogo.jpg">
    </div>
	<h5 style="text-align:center">Search Module</h5>

			<form enctype="multipart/form-data" action="searchbytime.php" method="POST">
				<input type="date" name="activity_date">
				<input type="submit" value="Search_by_time">
			</form>
			</br>
			<form enctype="multipart/form-data" action="searchbytype.php" method="POST">
				<select id="actype" name="activity_type">
				  <option value="academics">academics</option>
				  <option value="social">social</option>
				  <option value="physical">physical</option>
				  <option value="anonymous">anonymous</option>
				</select>
				<input type="submit" value="Search_by_type">
			</form>
			</br>
	<h5 style="text-align:center">Register Module</h5>		
    <div class="search-box" id="search-box" style='display:none;'>
      <input class="searchbar" type="text" title="Search" type="text" autocomplete="off" placeholder="Search Job..."/>
    
		<div class="result"></div>
		<div>
		<button class="regular" name="findJOB" id="findJOB"> <span> find </span> </button>
		</div>
	</div>
	
	<div id="Register_Activity" style='display:block;' class="container">
		<form enctype="multipart/form-data" action="RegisterActivity.php" method="POST">
		Activity Date/Time: <input type="datetime-local" name="activity_date"> 
		<label for="Activitytype">Activity Type:</label>
		<select id="actype" name="activity_type">
		  <option value="academics">academics</option>
		  <option value="social">social</option>
		  <option value="physical">physical</option>
		  <option value="anonymous">anonymous</option>
		</select>
		Activity Details:
		<textarea id="tiny_mce" name="activity_description" rows="8"></textarea>

			<input type="submit" value="RegisterActivity">

		</form>
</div>
 </center> 
</body>
</html>