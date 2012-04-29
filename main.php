<?php
include_once("./header.html");
?>

<div id="find">
<h1>Find Places</h1>
<div class="findy">
<form action="javascript:findPlace()" name="findForm" id="formFind">
<label>Your Username: </label><input type="text" name="userID" value="Alex" /><br>
<label>Your Location (ZIP): </label><input type="text" name="location" value="90024" /><br>
<input class="submitButton" type = "submit" value = "Submit" />
</form>
</div>
<div id="findResults" class="findy">
<h2>Results</h2>
</div>
<div style="clear:both"></div>
</div>


<div id="add">
<h1>Review Places</h1>
<div class="addy">
<form action="javascript:addPlace()" name="addForm" id="formAdd">
<label>Your Username: </label> <input type="text" name="userID" value="Alex" /><br>
<label>Place Name: </label><input type="text" name="thingID" /><br>
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
<div class="addy" id ="addResult"><h2>Submitted OK</h2></div>
<div style="clear:both"></div>
</div>
</body>
</html>
