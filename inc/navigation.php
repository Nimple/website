<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container-fluid">

		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="../nimple/index.php">
				<img src="../img/logos/logo_small.png" alt="">
				Nimple
			</a>
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="../nimple/guidance.php">Anleitung</a></li>
				<li><a href="../faq">FAQ</a></li>
				<li><a href="../contact">Kontakt</a></li>
				<li><a href="../press">Presse</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a class="lang_selection" href="../nimple_en/">english</a>
				</li>
			</ul>
		</div>
</nav>
<script>
	$(function () {
		$('.lang_selection').on('click', function() {
			//alert(window.location.href);
			var location = window.location.href;
			var new_location = location.substring(0, location.length - 1) + "_en";
			window.open(new_location,"_self")
		})
	});
</script>
