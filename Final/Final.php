 <!DOCTYPE html>
<html>
 <head>
 <meta charset="UTF-8">
 <title>Mailing List</title> 
 </head>
 <!-- requiring db, stating name 
 
	Not taking information into the database
 
 -->
 <?php 
	require_once("dbcon.php");
	//Andrew Geremia Final 5/30/2018
 ?>
 <body>
 <div>
 <h1>Account Sign Up</h1>
 <form action="display_results.php" method="post">
 
 <fieldset>
 <legend>Account Information</legend>
 <label>E-Mail:</label>
 <input type="text" name="email" value="" class="textbox"/>
 <br />
 <!-- using the built in filter for email validation -->
 <?php
	if( $_POST != null )
	{
		if(isset($_POST['email']) == true)
		{
			$email = $_POST['email'];
		
		if (filter_var($email, FILTER_VALIDATE_EMAIL)){
			echo $email . " Is valid.";
		}
		else{
			echo "Email address " . $email . " is invalid.";
		}
		}
	}
 ?>

 <label>Phone Number:</label>
 <input type="text" name="phone" value="" class="textbox"/>
 </fieldset>
<!-- trying to do the same with phone number validation using the validation for a national phone number -->
<!-- not giving any errors, however, not sure if validating -->
 <?php
	if( $_POST != null )
	{
		if(isset($_POST['phone']) == true)
		{
			$phone = $_POST['phone'];
		
		if ($result = Validate_AU::phonenumber($phone, VALIDATE_AU_PHONENUMBER_NATIONAL)){
			echo $phone . " Is valid.";
		}
		else{
			echo "Phone number " . $phone . " is invalid.";
		}
		}
	}
 ?>
 <fieldset>
 <legend>Settings</legend>

 <!-- Radio button selection for question, not enough time to continue with validation for if button was selected -->
 <p>How did you hear about us?</p>
 <input type="radio" name="heard_from" value="Search Engine" />
 Search engine<br />
 <input type="radio" name="heard_from" value="Friend" />
 Word of mouth<br />
 <input type=radio name="heard_from" value="Other" />
 Other<br />
<!-- optional for comments to be taken -->
 <p>Contact via:</p>
 <select name="contact_via">
 <option value="email">Email</option>
 <option value="text">Text Message</option>
 <option value="phone">Phone</option>
 </select>

 <p>Comments: (optional)</p>
 <textarea name="comments" rows="4" cols="50"></textarea>
 </fieldset>

 <input type="submit" value="Submit" />

 </form>
 <br />
 </div>
 </body>
</html>

