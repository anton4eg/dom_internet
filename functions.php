<?php

$include_path = 'includes/';

require_once ( $include_path . 'theme-functions.php' );

$theme = new NewTheme();

$theme->activate_menus();

$theme->activate_class_body();

include 'template-parts/enqueue.php';