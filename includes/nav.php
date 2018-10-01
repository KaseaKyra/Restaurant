<ul class="nav nav-pills nav-fill">
<!-- 	<li class="nav-item">
    <a class="nav-link active" href="index.php">Home</a>
</li>
<li class="nav-item">
    <a class="nav-link active" href="team.php">Team</a>
</li>
<li class="nav-item">
    <a class="nav-link active" href="menu.php">Menu</a>
</li>
<li class="nav-item">
    <a class="nav-link active" href="contact.php">Contact</a>
</li> -->

<?php 

foreach ($navItems as $item) {
	echo '<li class="nav-item"><a class="nav-link active" href="' 
	. $item['slug'] 
	. '">' 
	. $item['title'] 
	. '</a></li>';
}
?>
</ul>