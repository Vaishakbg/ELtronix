<?php

declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Determine whether the current environment is development.
 */
function eltronix_vite_is_development(): bool
{
    return in_array(
        wp_get_environment_type(),
        ['local', 'development'],
        true
    );
}

/**
 * Build a full Vite dev server URL.
 *
 * @param string $path Asset path relative to the Vite server root.
 */
function eltronix_vite_dev_server_url(string $path = ''): string
{
    return 'http://127.0.0.1:5173/' . ltrim($path, '/');
}

/**
 * Get the absolute path to the Vite manifest file.
 */
function eltronix_vite_manifest_path(): string
{
    return get_template_directory() . '/dist/.vite/manifest.json';
}

/**
 * Read and cache the Vite manifest file.
 *
 * @return array<string, mixed>
 */
function eltronix_vite_manifest(): array
{
    static $manifest = null;

    if (is_array($manifest)) {
        return $manifest;
    }

    $manifest_path = eltronix_vite_manifest_path();

    if (!file_exists($manifest_path)) {
        $manifest = [];
        return $manifest;
    }

    $decoded_manifest = wp_json_file_decode(
        $manifest_path,
        ['associative' => true]
    );

    if (!is_array($decoded_manifest)) {
        $manifest = [];
        return $manifest;
    }

    $manifest = $decoded_manifest;

    return $manifest;
}

/**
 * Resolve a manifest entry by key.
 *
 * @param string $entry Entry key, for example assets/js/app.js.
 * @return array<string, mixed>|null
 */
function eltronix_vite_manifest_entry(string $entry): ?array
{
    $manifest = eltronix_vite_manifest();

    if (!isset($manifest[$entry]) || !is_array($manifest[$entry])) {
        return null;
    }

    return $manifest[$entry];
}

/**
 * Build a URL for an asset inside the dist folder.
 *
 * @param string $asset Relative asset path from manifest.
 */
function eltronix_vite_dist_asset_url(string $asset): string
{
    return get_template_directory_uri() . '/dist/' . ltrim($asset, '/');
}