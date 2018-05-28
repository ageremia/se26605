<?php
	require_once("functions.php");
	if(isset($_SESSION['shopping_cart']) == false)
	{
		$_SESSION['shopping_cart'] = array();
	}
		
	if( $_POST != null )
	{
		if(isset($_POST['add_item']) == true)
		{
			if(array_key_exists($_POST['add_item'], $_SESSION['shopping_cart']) == false)
			{
			
				$_SESSION['shopping_cart'][$_POST['add_item']] = 1;
			}
			else
			{
				$_SESSION['shopping_cart'][$_POST['add_item']]++;
			}
		}
		else if(isset($_POST['remove_item']) == true)
		{
			if(array_key_exists($_POST['remove_item'], $_SESSION['shopping_cart']) == false)
			{
				echo "(nothing to remove...)";
			}
			else
			{
				$_SESSION['shopping_cart'][$_POST['remove_item']]--;
				if($_SESSION['shopping_cart'][$_POST['remove_item']] == 0)
				{
					unset($_SESSION['shopping_cart'][$_POST['remove_item']]);
				}
			}
		}
	}
?>



<form method="POST">
<?php

	$products = get_Products($db);
	while($row = $products->fetch())
	{
		echo '<div class="row">';
		echo '	<div class="middle_cell">';
		echo '		' . $row['category'];
		echo '	</div>';
		echo '	<div class="middle_cell">';
		echo '		' . $row['product'];
		echo '      <br>';
		echo '      <button type="submit" name="add_item" value="' . $row['product_id'] . '">Add To Cart</button>';
		if(array_key_exists($row['product_id'], $_SESSION['shopping_cart']) == true)
		{
			echo '       <br>';
			echo '       (' . $_SESSION['shopping_cart'][$row['product_id']] . ' in cart)<br>';
			echo '      <button type="submit" name="remove_item" value="' . $row['product_id'] . '">Remove From Cart</button>';
			
		}
		echo '	</div>';
		echo '	<div class="middle_cell">';
		echo '		' . $row['price'];
		echo '	</div>';
		echo '	<div class="large_cell">';
		echo '		' . '<img src="images/' . $row['image'] . '">';
		echo '	</div>';
		echo '</div>';
	}
?>
</form>
