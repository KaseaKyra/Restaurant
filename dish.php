<?php
define('TITLE', 'Dish | Franklin\'s Fine Dining');
define('TIP', '0.2');
include('includes/header.php');

function strip_bad_chars($input)
{
	$output = preg_replace('/[^a-zA-Z0-9_-]/', '', $input);
	return $output;
}

if (isset($_GET['item'])) {
	$item = strip_bad_chars($_GET['item']);
	$dish = $menuItem[$item];
}

// Calculate suggested tip
function calculateTip($price)
{
	$totalTip = $price * TIP;
	/*echo money_format('%.2n', $totalTip);*/
	echo $totalTip;
}
?>

<hr>
<div class="container">
	<div class="row">
		<div class="col-sm-6">
			<img class="img__size" src="img/<?php echo $dish['img'] ?>.jpg" alt="Sandwich">
		</div>
		<div class="col-sm-6">
			<h1 class="footer__copyright__position" ><?php echo $dish['title']; ?></h1>
			<p>Price: <span>$</span><?php echo $dish['price']; ?></p>
			<p><?php echo $dish['blurb']; ?></p>
			<p><strong>Suggested beverage: <?php echo $dish['drink']; ?></strong></p>
			<p><em>Suggested tip: $<?php calculateTip($dish['price']); ?></em></p>
		</div> <!-- col-sm-12 -->
	</div> <!-- row -->
	<div class="row">
		<a href="menu.php">&laquo; Back to Menu</a>
	</div>
</div> <!-- container -->
<hr>

<?php
include('includes/footer.php');
?>