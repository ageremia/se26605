<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 4</title>
</head>
<body>

<form action="index.php<?php if($action=="read") {echo "?id=" . $comp['id'];}?>" method="post">

		<h2><label Corps: <label/><?php echo $comp['corp'];?></h2>
		<h2><label>Established: <label/><?php echo $comp['incorp_dt'];?></h2>
		<h2><label>Email: <label/><?php echo $comp['email'];?></h2>
		<h2><label>ZipCode: <label/><?php echo $comp['zipcode'];?></h2>
		<h2><label>Owner: <label/><?php echo $comp['owner'];?></h2>
		<h2><label>Phone: <label/><?php echo $comp['phone'];?></h2>
		<a href=index.php>List</a>
	
    
</form>
<!--this is for the read page or view off of main page-->
</body>