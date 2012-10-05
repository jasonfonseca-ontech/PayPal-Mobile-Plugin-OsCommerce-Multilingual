<?php include 'header.php'; ?>
<style>
	table
</style>
<form id="cartform" method="post" action="checkout_process.php" ata-ajax="false">
<div id="main-page">
<div id="content">

<h3>Addresses</h3>
<div id="checkoutaddresses">
	<ul data-role="listview" data-inset="true" class="products ui-listview ui-listview-inset ui-corner-all ui-shadow" style="margin: 4px; width: 300px;">
	<li data-role="list-divider" role="heading" class="ui-li ui-li-divider ui-btn ui-bar-b ui-btn-up-undefined ui-corner-top">
        Billing Address
    </li>
	<li style="text-align:center; padding:2px;" class="ui-li ui-li-static ui-body-c">
        <table id="reviewaddresses">
        <tbody><tr>
            <td>Name</td><td><?php echo $_SESSION['billto']['firstname'] . " " . $_SESSION['billto']['lastname'] ?></td>
        </tr>
        
        <tr>
            <td>Address</td>
            <td>
                <?php echo ($_SESSION['billto']['street_address']) ?><br>
				<?php echo ($_SESSION['billto']['suburb']) ?><br>
				<?php echo ($_SESSION['billto']['city']) ?>, <?php echo ($_SESSION['billto']['postcode']) ?>
            </td>
        </tr>
        
        <tr>
            <td>Email</td>
            <td><?php echo $_SESSION['billto']['zone_id'] ?></td>
        </tr>
        </tbody></table>
	</li>
	<li data-role="list-divider" role="heading" class="ui-li ui-li-divider ui-btn ui-bar-b ui-btn-up-undefined">
        Shipping Address
    </li>
	<li style="text-align:center; padding:2px;" class="ui-li ui-li-static ui-body-c ui-corner-bottom">
        <table id="reviewaddresses">
        <tbody>
		<tr>
            <td>Name</td><td><?php echo $_SESSION['sendto']['firstname'] . " " . $_SESSION['sendto']['lastname'] ?></td>
        </tr>
        
        <tr>
            <td>Address</td>
            <td>
                <?php echo ($_SESSION['sendto']['street_address']) ?><br>
				<?php echo ($_SESSION['sendto']['suburb']) ?><br>
				<?php echo ($_SESSION['sendto']['city']) ?>, <?php echo ($_SESSION['sendto']['postcode']) ?>
            </td>
        </tr>
        
        <tr>
            <td>Email</td>
            <td><?php echo $_SESSION['sendto']['zone_id'] ?></td>
        </tr>
        </tbody></table>
	</li>
	</ul>
	</div>
<?php 
	require(DIR_WS_CLASSES . 'order.php');
	require(DIR_WS_CLASSES . 'shipping.php');
	$shipping_modules = new shipping;
    $quotes = $shipping_modules->quote(); 

?>


</div>
<div data-role="footer" class="ui-body ui-body-a ui-corner-all" data-theme="c" >
	<fieldset>
			<div data-role="fieldcontain">
				<label for="shipping" class="select">Shipping method:</label>
				<select name="shipping" id="shipping" data-theme="e">
				<?php foreach($quotes as $quote) { ?>
					<?php foreach($quote['methods'] as $row) { ?>
						<option value="<?php echo $quote['id'] ?>_<?php echo $row['id'] ?>">(<?php echo $quote['module'] ?>) <?php echo $row['title'] ?> <?php echo $currencies->format(tep_add_tax($row['cost'], $row['tax'])) ?></option>
					<?php } ?>
				<?php } //foreach ?>
			</select>
		</div>
	<button type="submit" data-theme="e" value="submit-value" data-role="button" class="ui-body">Pay Now</button>
	</fieldset>
			
</div>
</div>
 </form>
<?php include 'footer.php'; ?>

