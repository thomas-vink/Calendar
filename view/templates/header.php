<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Studenten app</title>	
	<link rel="stylesheet" type="text/css" href="/Calender/css/style.css">
</head>
<body>
	<nav>
	<ul>
		<li><a href="<?= URL ?>home/index">Home</a></li>
		<li><a href="<?= URL ?>Birthday/index">Calender</a></li>

	</ul>
	</nav>

	<!-- if session has an error, then show the error and then remove it from the session -->
	
		<?php 
		if (isset($_SESSION['errors'])) 
		{ 
			echo '<div class="errors">';
			echo $_SESSION['errors']; 
			echo '</div>';

			$_SESSION['errors'] = null;
		}

		?>
	
