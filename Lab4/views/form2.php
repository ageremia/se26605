<!DOCTYPE html>

<?php

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 3</title>
</head>
<body>

<form action="index.php<?php if($action=="update") {echo "?id=" . $comp['id'];}?>" method="post">
	<table>
		<tr><td>Corps:</td><td><input type="text" id="corp" name="corp" value="<?php echo $comp['corp'];?>"/></td></tr>
		<tr><td>Established:</td><td><input type="text" name="incorp_dt" value="<?php echo $comp['incorp_dt'];?>"/></td></tr>
		<tr><td>Email:</td><td><input type="text" name="email" value="<?php echo $comp['email'];?>"/></td></tr>
		<tr><td>ZipCode:</td><td><input type="text" name="zipcode" value="<?php echo $comp['zipcode'];?>"/></td></tr>
		<tr><td>Owner:</td><td><input type="text" name="owner" value="<?php echo $comp['owner'];?>"/></td></tr>
		<tr><td>Phone:</td><td><input type="text" name="phone" value="<?php echo $comp['phone'];?>"/></td></tr>
		
	</table>
	<input type="submit" name="action" value="update"/>
</form>
<!--form for the update-->
</body>