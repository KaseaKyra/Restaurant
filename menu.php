<?php
define('TITLE', 'Menu | Franklin\'s Fine Dining');
include('includes/header.php');
?>

<hr>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h1>Our Delicious Menu</h1>
			<p>
				Like our team, our menu is very small &smdash; but dang, does it
				ever pack a punch! 
			</p>
			<p><em>Click any menu to know more about it.</em></p>
		</div> <!-- col-sm-12 -->
	</div> <!-- row -->
</div> <!-- container -->
<hr>

<div class="container">
	<?php 
	foreach ($menuItem as $dish => $item) {
	?>
	<div class="row">
		<div class="col-sm-12">
			<a class="list-group-item list-group-item-action" href="dish.php?item=<?php echo $dish; ?>">
				<?php echo $item['title'] . ': '; ?>
				<span>$</span>
				<?php echo $item['price']; ?>
			</a>
		</div> <!-- col-sm-4 -->
	</div> <!-- row -->
	<?php 
	} 
	?>
</div> <!-- container -->

<?php
include('includes/footer.php'); 
?>