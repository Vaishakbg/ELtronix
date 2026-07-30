<?php

if (!defined('ABSPATH')) {
    exit;
}

require_once get_template_directory() . '/vendor/autoload.php';

$app = new \Eltronix\Core\Application();
$app->boot();
