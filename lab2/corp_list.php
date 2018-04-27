<h1>Corporations</h1>


    <?php 
		echo "<table>";
            foreach ($companies as $company):
            {
				echo "<tr><td>" . $company['corp'].
                "</td><td>" . $company['incorp_dt'].
                "</td><td>" . $company['email'].
                "</td><td>" . $company['zipcode'].
                "</td><td>" . $company['owner'].
                "</td><td>" . $company['phone'].
				"</td></tr>";
                
            }
            endforeach;
		echo "</table>";
		
	?>