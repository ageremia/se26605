<h1>Corporations</h1>
<!--this is the original listing for corporation with read update and delete-->

    <?php 
		echo "<a href=index.php?action=create>Create</a>";
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
		
		
	?>