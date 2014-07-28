<?php
  require('../inc_en/header.php');
?>

<div class="container">
	<h1>Contact</h1>

	<p>
		Do you have a question about Nimple or you'd like to give us feedback? Please fill out the form below and we will answer you as soon as possible.
		<br>
		Please read the FAQs <a href="../faq/">FAQ (Frequently Asked Questions)</a> before sending us a support request.
	</p>

	<form class="contact-form" method="post" action="send.php">
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
				<input name="name" type="text" class="form-control" placeholder="Your name">
			</div>
		</div>

		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><b>@</b></span>
				<input name="mail" type="text" class="form-control" placeholder="Your e-mail address">
			</div>
		</div>

		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-question-sign"></span></span>
				<input name="subject" type="text" class="form-control" placeholder="Subject">
			</div>
		</div>

		<div class="form-group">
			<textarea name="message" class="form-control" id="message" placeholder="Your message" rows="10"></textarea>
		</div>

		<!-- Form actions -->
		<div class="form-group">
			<button type="submit" class="btn btn-default">Send</button>
		</div>
	</form>

</div>

<?php
  require('../inc_en/footer.php');
?>
