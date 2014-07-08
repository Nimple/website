<?php
  require('../inc/header.php');
?>

<div class="container">
	<h1>Presse</h1>

	<div id="articles">
	</div>

</div>

<?php
  require('../inc/footer.php');
?>

<script id="article-template" type="text/template">
<div class="article">

	<h4><span class="glyphicon glyphicon-time"></span>  {{date}}</h4>
	<h1>{{title}}</h1>

	{{#image}}
		<img src={{image}}>
	{{/image}}
	
	<p class="text">
		{{text}}
	</p>

	{{#audio-file}}
		<br>
		<audio controls class="audio">
			<source src={{audio-file}} type="audio/mp3">
			Dein Browser unterstützt leider keine Audio-Datien. Wir empfehlen dir <a href="" target="_blank">Google Chrome</a>.
		</audio>
		<br>
	{{/audio-file}}

	<a class="extern-link" href="{{link}}">{{link-text}}</a>
	<br>
	<br>
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