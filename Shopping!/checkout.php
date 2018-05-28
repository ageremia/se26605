<?php
	session_start();
	if( isset($_SESSION['user_id']) == false)
		$_SESSION['user_id'] = 0;
	if( isset($_SESSION['admin_id']) == false)
		$_SESSION['admin_id'] = 0;
	
	require_once("dbcon.php");
	require_once("functions.php");

	if($_SESSION['user_id'] <= 0)
	{
		header('Location: index.php');
	}
?>


<?php require("header.php"); ?>

<div id="receipt">
<?php
	$products = get_Products($db);
	$productPriceArr = array();
	$productNameArr = array();
	while($row = $products->fetch())
	{
		$productPriceArr[$row['product_id']] = $row['price'];
		$productNameArr[$row['product_id']] = $row['product'];
	}
	
	$total_price = 0;
	foreach($_SESSION['shopping_cart'] as $key => $value)
	{
		echo $productNameArr[$key] . 
		' (qty ' . $value . ' @ $' . 
		$productPriceArr[$key]  .'): $' . 
		$value*$productPriceArr[$key]*1;
		if( (int)($productPriceArr[$key]) == $productPriceArr[$key] )
		{
			echo ".00";
		}
		echo '<br>';
		
		$total_price += $value*$productPriceArr[$key];
	}
	echo "-------<br>";
	echo "SUB-TOTAL: $" . $total_price . "<br>";
	echo "TAX: $" . (int)(0.07*$total_price*100)/100.0 . "<br>";
	echo "TOTAL: $" . (int)(1.07*$total_price*100)/100.0 . "<br>";
	echo "<a href=paypal.com>Pay by Paypal</a>";

?>
</div>


<?php require("footer.php"); ?>


