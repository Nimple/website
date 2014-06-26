<?php
  require('../inc/header.php');
?>

<div class="container">
	<h1>Presse</h1>
	<h2>Nimple in den Medien</h2>

	<div class="articles">
	</div>

</div>

<?php
  require('../inc/footer.php');
?>

<script>
$(function () {
	function renderTemplate(view){
		$.get('./template-article.mst', function(template) {
			var rendered = Mustache.render(template, view);
			$('.articles').append(rendered);
			$('.articles div').velocity("fadeIn", {delay: 200, opacity: 1});
		});
	}

	var articles;
	$.getJSON( "articles.json", { name: "John", time: "2pm" } )
		.done(function( json ) {
			//console.log( "JSON Data: " + json.articles );
			articles = json.articles;
			$.each(articles, function(key, value) {
				renderTemplate(value);
			});
		})
		.fail(function( jqxhr, textStatus, error ) {
			var err = textStatus + ", " + error;
			//console.log( "Request Failed: " + err );
		});
});

</script>