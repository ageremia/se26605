<?php
	require_once('functions.php');
	
	if( $_POST != null )
	{
		if(isset($_POST['update_item']) == true)
		{
			$changed = $_POST['update_item'];
			$sql = "UPDATE sh_products SET product='" . $_POST['product_'.$changed] . "', price=" . $_POST['price_'.$changed] . ", image='" . $_POST['image_'.$changed] . "', category_id=" . $_POST['category_id_'.$changed] . " WHERE product_id=".$changed.";";
			$db->query($sql);
			echo $sql;
			echo "(" . $_POST['product_'.$changed] . " @ $" . $_POST['price_'.$changed] . ")";
		}
		else if(isset($_POST['delete_item']) == true)
		{
			$deleted = $_POST['delete_item'];
			$sql = "DELETE FROM sh_products WHERE product_id=".$deleted.";";
			$db->query($sql);
		}
		else if(isset($_POST['create_item']) == true)
		{
			$category_id = $_POST['category_id'];
			$product = $_POST['product_0'];
			$price = $_POST['price_0'];
			$image = $_POST['image_0'];
			$sql = "INSERT INTO sh_products(category_id, product, price, image) VALUES ($category_id, '$product', $price, '$image');";
			echo $sql;
			$db->query($sql);
		}
	}
?>



<form method="POST">
	<div class="input_box">
		Add Item<br><br>
		Category
		<select name="category_id">
		<?php
			$categoriesArr = array();
			$categories = get_Categories($db);
			while($row = $categories->fetch())
			{
				echo '<option value="'.$row['category_id'].'">'.$row['category'].'</option>';
				$categoriesArr[$row['category_id']] = $row['category'];
			}
		?>
		</select><br>
		Product
		<input name="product_0">
		Price
		<input name="price_0">
		Image
		<input name="image_0">
		<button type="submit" name="create_item" value="0">Create</button>
	</div>

<?php
	$products = get_Products($db);
	while($row = $products->fetch())
	{
		echo '<div class="row">';
		echo '	<div class="middle_cell">';
		echo '    <select name="category_id_'.$row['product_id'].'">';
		foreach($categoriesArr as $key => $value)
		{
			echo '      <option value="'.$key.'"';
			if($value == $row['category'])
			{
				echo ' selected';
			}
			
			echo '>'.$value.'</option>';
		}
		echo '    </select>';
		//echo '		' . $row['category'];
		echo '<br><br><br><br>';
		echo '      <button type="submit" name="update_item" value="' . $row['product_id'] . '">Update</button>';
		echo '<br><br>';
		echo '      <button type="submit" name="delete_item" value="' . $row['product_id'] . '">Delete</button>';
		echo '	</div>';
		echo '	<div class="middle_cell">';
		echo '		<input name="product_'.$row['product_id'].'" value="' . $row['product'] . '">';
		echo '	</div>';
		echo '	<div class="middle_cell">';
		echo '		<input name="price_'.$row['product_id'].'" value="' . $row['price'] . '">';
		echo '	</div>';
		echo '	<div class="large_cell">';
		echo '      <input name="image_'.$row['product_id'].'" value="' . $row['image'] . '">';
		echo '      <br>';
		echo '		' . '<img src="images/' . $row['image'] . '">';
		echo '	</div>';
		echo '</div>';
	}
?>
</form>