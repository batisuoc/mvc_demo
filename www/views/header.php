<!DOCTYPE html>
<html>

<head>
	<title>Header View</title>
	<link rel="stylesheet" type="text/css" href="<?= URL ?>public/css/default.css">
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script type="text/javascript" src="<?= URL ?>public/js/custom.js"></script>
	<?php
	if (isset($this->js)) {
		// echo 1;
		foreach ($this->js as $js) {
			echo '<script type="text/javascript" src="' . URL . 'views/' . $js . '"></script>';
		}
	}

	?>
</head>

<body>
	<div id="header">
		<?php if (Session::get('loggedIn') == false) { ?>
			<a href="<?= URL ?>index">Index</a>
			<a href="<?= URL ?>help">Help</a>
		<?php } ?>
		<?php if (Session::get('loggedIn') == true) { ?>
			<a href="<?= URL ?>dashboard">Dashboard</a>
			
			<?php if (Session::get('role') == 'owner') { ?>
				<a href="<?= URL ?>user">Users</a>
			<?php } ?>

			<a href="<?= URL ?>dashboard/logout">Log out</a>
		<?php } else { ?>
			<a href="<?= URL ?>login">Log in</a>
		<?php } ?>


	</div>
	<div id="content">
		<!-- content -->