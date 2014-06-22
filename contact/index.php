<?php
  require('../inc/header.php');
?>

<div class="container">
	<h1>Kontakt</h1>
	<h2>Ihre Nachricht an <b><em>info@appstronauten.com</em></b></h2>

	<form class="contact-form" method="post" action="send.php">
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
				<input name="name" type="text" class="form-control" placeholder="Ihr Name">
			</div>
		</div>

		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><b>@</b></span>
				<input name="mail" type="text" class="form-control" placeholder="Ihre E-Mail Adresse">
			</div>
		</div>

		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-question-sign"></span></span>
				<input name="subject" type="text" class="form-control" placeholder="Betreff">
			</div>
		</div>

		<div class="form-group">
			<textarea name="message" class="form-control" id="message" placeholder="Ihre Nachricht an uns" rows="10"></textarea>
		</div>

		<!-- Form actions -->
		<div class="form-group">
			<button type="submit" class="btn btn-default">Senden</button>
		</div>
	</form>

</div>

<?php
  require('../inc/footer.php');
?>
