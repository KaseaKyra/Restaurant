<?php 
// define constant
define('COMPANY_NAME', 'Franklin\'s fine dining');
?>
		<div class="content">
			<div class="container">
				<div class="row">
					<div class="col-sm-4 footer__copyright__position">
					  	<strong>Phone: </strong><br>808.529.3819
					</div>
					<div class="col-sm-4 footer__copyright__position">
					  	<strong>Location:</strong><br>123 Kaopiolani Boulevard
					</div>
					<div class="col-sm-4 footer__copyright__position">
						<strong>Hour</strong><br>
						<!-- Code restaurant openning time use HTML -->
						<!-- <strong>Hour</strong><br>
						<em>Tuesday - Thursday</em><br>
						1:00pm - 9:00pm <br><br>
						<em>Friday - Saturday</em><br>
						4:00pm - 11:00pm <br><br>
						<em>Sunday - Monday</em><br>
						Closed<br><br> -->
						<?php 
						include('hours/index.php'); 
						/*include('hours/StoreHours.class.php');*/
						/*include('hours/StoreHours2.class.php');*/
						?>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 footer__copyright__position">
						<!-- <small>&copy;2014 Brad Hussey</small> --> <!-- Cách 1: tạo ra static copyright -->
						<small>
							&copy;<?php echo date('Y'); echo ' ' . COMPANY_NAME;?>
						</small>
					</div>
				</div>
			</div>
			<!-- code doesn't use bootstrap, must use css -->
			<!-- <div id="footer" class="cf">
				<div class="column three">
					<strong>Phone: </strong>808.529.3819
				</div>
				<div class="column three">
					<strong>Location:</strong>123 Kaopiolani Boulevard
				</div>
				<div class="column three last">
					<strong>Hour</strong>
					<em>Tuesday - Thursday</em><br>
					1:00pm - 9:00pm <br><br>
					<em>Friday - Saturday</em><br>
					4:00pm - 11:00pm <br><br>
					<em>Sunday - Monday</em><br>
					Closed<br><br>
				</div> Column three last
			</div> Footer -->
		</div> <!-- Content -->
	</body>
</html>