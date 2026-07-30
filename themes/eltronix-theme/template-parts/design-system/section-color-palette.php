<?php
/**
 * Design system section: Color palette.
 *
 * @package Eltronix
 */

declare(strict_types=1);

if (! defined('ABSPATH')) {
    exit;
}
?>
<section class="rounded-2xl border border-slate-200 p-6" aria-labelledby="ds-color-palette-title">
    <header class="mb-5">
        <h2 id="ds-color-palette-title" class="text-2xl font-semibold text-slate-900"><?php esc_html_e('Color Palette', 'eltronix'); ?></h2>
        <p class="mt-2 text-sm text-slate-600"><?php esc_html_e('Core brand and utility colors used across key surfaces and states.', 'eltronix'); ?></p>
    </header>

    <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
        <article class="overflow-hidden rounded-xl border border-slate-200">
            <div class="h-20 bg-slate-900"></div>
            <div class="p-3">
                <p class="text-sm font-medium text-slate-900">Slate 900</p>
                <p class="text-xs text-slate-600">#0f172a</p>
            </div>
        </article>
        <article class="overflow-hidden rounded-xl border border-slate-200">
            <div class="h-20 bg-slate-100"></div>
            <div class="p-3">
                <p class="text-sm font-medium text-slate-900">Slate 100</p>
                <p class="text-xs text-slate-600">#f1f5f9</p>
            </div>
        </article>
        <article class="overflow-hidden rounded-xl border border-slate-200">
            <div class="h-20 bg-sky-600"></div>
            <div class="p-3">
                <p class="text-sm font-medium text-slate-900">Sky 600</p>
                <p class="text-xs text-slate-600">#0284c7</p>
            </div>
        </article>
        <article class="overflow-hidden rounded-xl border border-slate-200">
            <div class="h-20 bg-emerald-500"></div>
            <div class="p-3">
                <p class="text-sm font-medium text-slate-900">Emerald 500</p>
                <p class="text-xs text-slate-600">#10b981</p>
            </div>
        </article>
    </div>
</section>
