<?php
  require('../inc/header.php');
?>

<div class="container">
	<h1>Kontakt</h1>

	<p>
		Hast Du eine Frage zu Nimple oder möchtest du uns Feedback geben? Dann fülle bitte das unten stehende Formular aus und wir werden uns so bald wie möglich bei Dir melden.
		<br>
		Bitte lese zunächst die <a href="../faq/">FAQ (Frequently Asked Questions)</a>, bevor Du eine Supportanfrage sendest.
	</p>

	<form class="contact-form" method="post" action="send.php">
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
				<input name="name" type="text" class="form-control" placeholder="Dein Name">
			</div>
		</div>

		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><b>@</b></span>
				<input name="mail" type="text" class="form-control" placeholder="Deine E-Mail Adresse">
			</div>
		</div>

		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-question-sign"></span></span>
				<input name="subject" type="text" class="form-control" placeholder="Betreff">
			</div>
		</div>

		<div class="form-group">
			<textarea name="message" class="form-control" id="message" placeholder="Deine Nachricht an uns" rows="10"></textarea>
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
