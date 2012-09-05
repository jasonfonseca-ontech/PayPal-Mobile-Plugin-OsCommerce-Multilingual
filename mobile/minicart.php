<div style="padding: 10px;">
	<?php if(isset($_SESSION['cart'])) { ?>
	<?php 
	$arr = array(
			"{count}" => $_SESSION['cart']->count_contents(),
			"{total}" => $currencies->format($_SESSION['cart']->show_total())
		);
		echo str_replace(array_keys($arr),array_values($arr), $_['You have x items in your cart the total is y']);  else { ?>
	<?php echo $_['You have']; ?> <span class="itemcount">0</span><?php echo $_['items in your cart']; ?><br/><?php echo $_['the total is']; ?> <span class="total">$<?php echo $currencies->format(0); ?></span>		
	<?php } ?>
</div>