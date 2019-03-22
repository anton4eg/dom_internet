<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1">
	<title><?= get_the_title(); ?></title>
	<style type="text/css">.loaded .main-wrapper {opacity: 0;}.icon-load {background: url(<?= get_template_directory_uri(); ?>/assets/img/loader.gif) no-repeat left top;width: 40px;height: 40px;position: fixed;left: 50%;top: 50%;margin-left: -20px;margin-left: -20px;display: none;}.loaded .icon-load {display: block;}
	</style>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<!-- BEGIN BODY -->