<?php
// Nav Menu Item
$navItems = array(
	/*array(
			slug	=> 'index.php',
			title 	=> 'Home'
	),
	array(
			slug	=> 'team.php',
			title 	=> 'Team'
	),
	array(
			slug	=> 'menu.php',
			title 	=> 'Menu'
	),
	array(
			slug	=> 'contact.php',
			title 	=> 'Contact'
	)*/

	array(
			'slug'  => 'index.php',
			'title' => 'Home'
	),
	array(
			'slug'  => 'team.php',
			'title' => 'Team'
	),
	array(
			'slug'  => 'menu.php',
			'title' => 'Menu'
	),
	array(
			'slug'  => 'contact.php',
			'title' => 'Contact'
	)
);

// Team array
$teamMember = array(
	array(
			'name'     => 'Frankie III',
			'position' => 'Owner',
			'bio'      => 'Frankie is great-son of the original Franklin. He is
			 			   the owner of Franklin\'s Fine Dining. He cooks a 
			 			   mean Fritatta!',
			'img' 	   => 'Frankie'
	),

	array(
			'name'     => 'Francis',
			'position' => 'Generall Manager',
			'bio'      => 'Francis knows her stuff. The big sister of Frankie himself,
						    she runs the show. Don\'t miss her Magherita Mondays!',
			'img' 	   => 'Francis'
	),

	array(
			'name'     => 'Carlos',
			'position' => 'Head Chef',
			'bio'      => 'Carlos is epitome of the phrase &ldquo;Don\'t judge the 
							book by its cover&rdquo; &mdash; You simple cannot find a better chef.',
			'img' 	   => 'Carlos'
	),
);

// Menu array
$menuItem = array(
	'club-sandwich' => array(
		'title' 	=> 'Club-Sandwich',
		'price' 	=> 11,
		'blurb' 	=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
						Quae eaque, totam dolorem ratione, quibusdam, blanditiis possimus ab 
						cumque libero, vero ea officiis a! Dolor nesciunt quia exercitationem
						quaerat, ratione quidem.',
		'drink' 	=> 'Club-Soda',
		'img'		=>	'sandwich'
	),

	'dill-salmon' 	=> array(
		'title' 	=> 'Lemon &amp; Dill Salmon',
		'price' 	=> 18,
		'blurb' 	=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
						Quae eaque, totam dolorem ratione, quibusdam, blanditiis possimus ab 
						cumque libero, vero ea officiis a! Dolor nesciunt quia exercitationem
						quaerat, ratione quidem.',
		'drink' 	=> 'Francy Wine',
		'img' 		=> 'dill-salmon'
	),

	'super-salad' 	=> array(
		'title'		=> 'The Super Salad',
		'price' 	=> 34,
		'blurb' 	=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
						Quae eaque, totam dolorem ratione, quibusdam, blanditiis possimus ab 
						cumque libero, vero ea officiis a! Dolor nesciunt quia exercitationem
						quaerat, ratione quidem.',
		'drink' 	=> 'Jug o\' Water',
		'img' 		=> 'super-salad'
	),

	'mexican-barbacoa' => array(
		'title' 	=> 'Mexican Barbacoa',
		'price' 	=> 23,
		'blurb' 	=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
						Quae eaque, totam dolorem ratione, quibusdam, blanditiis possimus ab 
						cumque libero, vero ea officiis a! Dolor nesciunt quia exercitationem
						quaerat, ratione quidem.',
		'drink' 	=> 'Beer with a lime',
		'img' 		=> 'mexican-barbacoa'
	),
);
?>