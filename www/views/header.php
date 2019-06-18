<!DOCTYPE html>
<html>
<head>
	<title>Header View</title>
	<link rel="stylesheet" type="text/css" href="<?= URL ?>public/css/default.css">
	<script type="text/javascript" src="<?= URL ?>public/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="<?= URL ?>public/js/custom.js"></script>

</head>
<body>

	<div id="header">
		Header<br>
		<a href="<?= URL ?>index">Index</a>
		<a href="<?= URL ?>help">Help</a>
		<?php if (Session::get('loggedIn') == true) { ?>
		<a href="<?= URL ?>login">Log out</a>
		<?php } else { ?>
		<a href="<?= URL ?>dashboard/logout">Log in</a>
		<?php } ?>
		
		
	</div>
	<div id="content">
	<!-- content -->