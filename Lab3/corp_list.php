<h1>Corporations</h1>


    <?php 
		
		echo "<table>";
            foreach ($companies as $company):
            {
				echo "<tr><td>" . $company['corp'] . 
				"</td><td>" . "<a href=read.php?action=read&id=" . $company['id'] . ">Read</a>" .
                "</td><td>" . "<a href=index.php?action=update&id=" . $company['id'] . ">Update</a>" .
                "</td><td>" . "<a href=index.php?action=delete&id=" . $company['id'] . ">Delete</a>" .
                "</td></tr>";
				                
            }
            endforeach;
		echo "</table>";
		echo "<a href=create.php?action=create>Create</a>";
		
	?>