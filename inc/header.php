<?php
	if (empty($title)) {
		$title = getcwd();
		$pos = strrpos($title, "/", 0);
		$title = ucfirst(substr($title, $pos + 1, strlen($title)));
	}
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?=$title ?></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="../css/vendor/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="../css/vendor/bootstrap/bootstrap-theme.min.css">
		<link rel="stylesheet" href="../css/vendor/fotorama/fotorama.css">
		<link rel="stylesheet" href="../css/main.css">

		<link rel="shortcut icon" href="../img/favicon/favicon.ico" type="image/x-icon">
		<link rel="icon" href="../img/favicon/favicon.ico" type="image/x-icon">

		<script src="../js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
		<script src="../js/vendor/jquery-1.11.0.min.js"></script>
		<script async src="../js/vendor/fotorama.js"></script>
		<script async src="../js/vendor/bootstrap.min.js"></script>
		<script async src="../js/vendor/skrollr.min.js"></script>
		<script async src="../js/main.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<!--[if lt IE 7]>
			<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

	<?php require('navigation.php'); ?>