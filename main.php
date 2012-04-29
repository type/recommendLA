<?php
include_once("./header.html");
?>

<div id="find">
<h1>Find Places</h1>
<form action="#######FILL THIS IN" method="post" name="findForm">
<label>Your Username: </label><input type="text" name="uname" value="Alex" /><br>
<label>Your Location (ZIP): </label><input type="text" name="location" value="90024" /><br>
<input class="submitButton" type = "submit" value = "Submit" />
</form>
</div>


<div id="add">
<h1>Review Places</h1>
<form action="########SUBMISSION FILL THIS IN" method="post" name="addForm">
<label>Your Username: </label> <input type="text" name="uname" value="Alex" /><br>
<label>Place Name: </label><input type="text" name="thing" /><br>
<!--Attribute:Rating pairs-->
<label>Food: </label><select name="food">
<?php
for($i = 1; $i <= 5; $i++){
	echo "<option value=$i";
	if ($i === 3) echo " selected='selected'";
	 echo ">$i</option>";
	}
?>
</select><br>

<label>Price: </label><select name="price">
<?php
for($i = 1; $i <= 5; $i++){
	echo "<option value=$i";
	if ($i === 3) echo " selected='selected'";
	 echo ">$i</option>";
	}
?>
</select><br>

<label>Atmosphere: </label><select name="atmosphere">
<?php
for($i = 1; $i <= 5; $i++){
	echo "<option value=$i";
	if ($i === 3) echo " selected='selected'";
	 echo ">$i</option>";
	}
?>
</select><br>
<input class="submitButton" type="submit" value = "Submit Review" />
</form>
</div>
</body>
</html>
