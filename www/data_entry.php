<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php include('breadcrumb.php'); echo $_SESSION['username']; ?>


<label>Family Id</label>&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<label>Family Head</label>&nbsp;&nbsp;&nbsp;||
<label>Area</label>&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<label>Entry Date</label>&nbsp;&nbsp;&nbsp;||<label>Category</label>
<br>


<form>

	<input type="text" name="monthly" placeholder="Monthly">
	<textarea name="monthly_desc"></textarea><br>

	<input type="text" name="missionary" placeholder="Missionary">
	<textarea name="missionay_desc"></textarea>
	<br>

	<input type="text" name="rice" placeholder="Rice">
	<textarea name="rice_desc"></textarea>
<br>
	<input type="submit" name="" value="Submit">
</form>


<?php
include('footer.php');
?>