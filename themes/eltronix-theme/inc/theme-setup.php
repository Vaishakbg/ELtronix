<?php

if (!defined('ABSPATH')) {
    exit;
}

function eltronix_theme_setup(): void
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('woocommerce');
    add_theme_support('html5', [
        'search-form',
        'gallery',
        'caption',
        'style',
        'script',
    ]);

    register_nav_menus([
        'primary' => __('Primary Menu', 'eltronix'),
    ]);
}

add_action('after_setup_theme', 'eltronix_theme_setup');