<!DOCTYPE html>
<html>

<head>
	<title>Header View</title>
	<link rel="stylesheet" type="text/css" href="<?= URL ?>public/css/default.css">
	<script type="text/javascript" src="<?= URL ?>public/js/jquery-3.4.1.min.js"></script>
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