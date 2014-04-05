<?php
  if (empty($title)) {
    $title = getcwd();
    $pos = strrpos($title, "/", 0);
    $title = ucfirst(substr($title, $pos + 1, strlen($title)));
  }
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?=$title ?></title>
    <link rel="stylesheet" href="/css/style.css" media="all">
    <link rel="stylesheet" href="/css/style.screen.css" media="screen">
    <link rel="stylesheet" href="/css/style.handheld.css" media="handheld">

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,700,300,500">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div id="page">
