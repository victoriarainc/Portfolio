<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
		<title>Victoria Rain</title>
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1" /> <!-- Triggers responsive -->
		<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>

	<?php wp_head();?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="site-inner">
		<header> <!-- Start Header area -->
	<nav>
		<div>
			<a class="icon" href="photography"><i class="fab fa-instagram"></i></a>
		</div>
		<div>						
			<a class="icon" href="poetry"><i class="fa fa-arrow-circle-right"></i></a>
		</div>
		<div>
			<a class="icon" href="handmade"><i class="fab fa-angellist"></i></a>
		</div>
		<div>
			<a class="icon" href="structure"><i class="fab fa-angrycreative"></i></a>
		</div>
	</nav>
</header>

		<div id="content" class="site-content">
