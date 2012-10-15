<?php include 'header.php'; ?>

<h1 id="checkoutSuccessHeading"><?php echo $_['Thank You! We Appreciate your Business!']; ?></h1>

<?php 
  	require(DIR_WS_LANGUAGES . $language . '/' . FILENAME_CHECKOUT_SUCCESS);
		$global_query = tep_db_query("select global_product_notifications from " . TABLE_CUSTOMERS_INFO . " where customers_info_id = '" . (int)$customer_id . "'");
		$global = tep_db_fetch_array($global_query);
		$orders_query = tep_db_query("select orders_id from " .TABLE_ORDERS. " where customers_id = '" . (int)$customer_id . "' order by date_purchased desc limit 1");
		$orders = tep_db_fetch_array($orders_query);
		$order = new order;
		if (!tep_session_is_registered('customer_id')) {
			tep_redirect(tep_href_link(FILENAME_SHOPPING_CART));
		}
		 $orders_id = $orders['orders_id'];
		 $products_array = array();
		$products_query = tep_db_query("select products_id, products_name from " . TABLE_ORDERS_PRODUCTS . " where orders_id = '" . (int)$orders['orders_id'] . "' order by products_name");
		while ($products = tep_db_fetch_array($products_query)) {
		  $products_array[] = array('id' => $products['products_id'],
									'text' => $products['products_name']);
		}
?>

<div style="background:#fff; border:1px solid #ccc; padding:10px; text-align:center; font-weight:bold;">

<p><?php echo str_replace('{order}', $orders_id, $_['Your order number is x']); ?></p>

<p><?php echo $_['Your customer id:']; ?> <?php echo (int)$customer_id  ?></p>

</div>
<h2>Your Order: </h2>
<ol>
<?php


    $products_displayed = array();
    for ($i=0, $n=sizeof($products_array); $i<$n; $i++) {
      if (!in_array($products_array[$i]['id'], $products_displayed)) {
        echo '<li>' . $products_array[$i]['text'] . '</li>';
        $products_displayed[] = $products_array[$i]['id'];
      }
    }
echo "</ol>";

 
?>


<?php
include('footer.php');
?>