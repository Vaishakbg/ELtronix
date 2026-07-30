<?php

declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}

add_action('wp_enqueue_scripts', 'eltronix_enqueue_assets');

/**
 * Enqueue frontend assets from Vite dev server or build manifest.
 */
function eltronix_enqueue_assets(): void
{
    if (eltronix_vite_is_development()) {
        wp_enqueue_script(
            'vite-client',
            eltronix_vite_dev_server_url('@vite/client'),
            [],
            null
        );
        wp_script_add_data('vite-client', 'type', 'module');

        wp_enqueue_script(
            'eltronix-app',
            eltronix_vite_dev_server_url('assets/js/app.js'),
            ['vite-client'],
            null,
            true
        );
        wp_script_add_data('eltronix-app', 'type', 'module');

        return;
    }

    $entry = eltronix_vite_manifest_entry('assets/js/app.js');

    if (!is_array($entry) || empty($entry['file']) || !is_string($entry['file'])) {
        return;
    }

    if (!empty($entry['css']) && is_array($entry['css'])) {
        foreach ($entry['css'] as $index => $css_file) {
            if (!is_string($css_file)) {
                continue;
            }

            wp_enqueue_style(
                'eltronix-app-' . (string) $index,
                eltronix_vite_dist_asset_url($css_file),
                [],
                null
            );
        }
    }

    wp_enqueue_script(
        'eltronix-app',
        eltronix_vite_dist_asset_url($entry['file']),
        [],
        null,
        true
    );
}