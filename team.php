<?php
define('TITLE', 'Team | Franklin\'s Fine Dining');
include('includes/header.php');
?>

<hr>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h1>Our Team at Franklin's</h1>
			<p>
				We are small, but mighty. Franklin's Fine Dining has been family-owned
				and run business since the dirty thirties, and we're proud of it. When 
				you get three together, you never know what can happen. But you can count 
				on one thing: <strong>The best food you've had. Ever</strong>
			</p>
			<p>And you can call us Frankie's. You're family here.</p>
		</div>
	</div>
</div>
<hr>

<div class="container">
	<div class="row">
	<?php 
	foreach ($teamMember as $member) {
	?>
		<div class="col-sm-4">
			<img class="img__size" src="img/<?php echo $member['img']; ?>.jpg" 
				 alt="<?php echo $member['name']; ?>">
			<h2><?php echo $member['name']; ?></h2>
			<p><?php echo $member['bio']; ?></p>
		</div> <!-- col-sm-4 -->
	<?php
	}
	?>
	</div> <!-- row -->
</div> <!-- container -->

<?php 
include('includes/footer.php');
?>