<?php
  require('../inc/header.php');
?>

<div class="container">
	<h1>Presse</h1>
	<h2>Nimple in den Medien</h2>

	<div id="articles">
	</div>

</div>

<?php
  require('../inc/footer.php');
?>

<script id="article-template" type="text/template">
<div class="article">
	<h1>{{title}}</h1>
	<p>
		{{text}}
	</p>
	<a href="{{link}}">{{link-text}}</a>
	<hr>
</div>
</script>

<script>


	var animated = false;
	var articles = [];

	function displayArticles(articles) {
		for(var i=0; i < articles.length; i++) {
			renderTemplate(i, articles.length, articles[i]);
		};
	}

	$.getJSON( "articles.json", function( data ) {
		var items = [];
		$.each( data.articles, function( key, value ) {
			var template = $('#article-template').html();
			var html = Mustache.to_html(template, value);
			$('#articles').append(html);
		});
		$('.article').velocity('transition.slideRightIn', {delay: 800, stagger: 500});
	});


</script>