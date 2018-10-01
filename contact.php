<?php
	define('TITLE', 'Contact | Franklin\'s Fine Dining');
	include('includes/header.php');
?>

<div class="container">
	<div class="row">
		<div class="col-sm-12 text-center">
			<h1>Get in touch with us!</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4">
		<div class="col-sm-4 text-center">
			<form method="POST" action="">
				<div class="form-group">
					<label for="inputPassword3" class="col-form-label">Your name</label>
					<div class="col-sm-12">
						<input type="text" name="name" class="form-control" id="inputPassword3"
						 placeholder="Password">
					</div>
				</div> <!-- Input name -->
				<div class="form-group">
					<label for="inputEmail3" class="col-form-label">Your email</label>
					<div class="col-sm-12">
						<input type="email" name="email" class="form-control" id="inputEmail3"
						 placeholder="Email">
					</div>
				</div> <!-- Input email -->
			  	<div class="form-group">
				    <label for="exampleFormControlTextarea1">Your message</label>
				    <textarea name="message" class="form-control" id="exampleFormControlTextarea1"
				     rows="3" placeholder="Type your message">
				    </textarea>
			  	</div> <!-- Textarea --> 
				<div class="form-group">
					<div class="col-sm-12">
						<div class="form-check">
							<input name="checkbox" class="form-check-input" type="checkbox" id="gridCheck1">
							<label class="form-check-label" for="gridCheck1">Subcribe to get new letter</label>
						</div>
					</div>
				</div> <!-- Check box -->
				<div class="form-group row">
					<div class="col-sm-10">
						<button type="submit" name="submit" class="btn btn-primary">Submit</button>
					</div>
				</div> <!-- form-group submit -->
			</form>
		</div> <!-- col-sm-4 form -->
		<div class="col-sm-4">
	</div> <!-- row -->
</div> <!-- container -->

<?php
include('includes/footer.php');
?>