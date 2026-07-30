<?php
/**
 * Design system section: Spacing scale.
 *
 * @package Eltronix
 */

declare(strict_types=1);

if (! defined('ABSPATH')) {
    exit;
}
?>
<section class="rounded-2xl border border-slate-200 p-6" aria-labelledby="ds-spacing-title">
    <header class="mb-5">
        <h2 id="ds-spacing-title" class="text-2xl font-semibold text-slate-900"><?php esc_html_e('Spacing Scale', 'eltronix'); ?></h2>
        <p class="mt-2 text-sm text-slate-600"><?php esc_html_e('Reference spacing tokens for consistent vertical rhythm and layout density.', 'eltronix'); ?></p>
    </header>

    <div class="space-y-3">
        <div class="flex items-center gap-4">
            <span class="w-16 text-xs font-semibold text-slate-500">4px</span>
            <span class="h-2 w-2 rounded bg-sky-600"></span>
        </div>
        <div class="flex items-center gap-4">
            <span class="w-16 text-xs font-semibold text-slate-500">8px</span>
            <span class="h-2 w-4 rounded bg-sky-600"></span>
        </div>
        <div class="flex items-center gap-4">
            <span class="w-16 text-xs font-semibold text-slate-500">16px</span>
            <span class="h-2 w-8 rounded bg-sky-600"></span>
        </div>
        <div class="flex items-center gap-4">
            <span class="w-16 text-xs font-semibold text-slate-500">24px</span>
            <span class="h-2 w-12 rounded bg-sky-600"></span>
        </div>
        <div class="flex items-center gap-4">
            <span class="w-16 text-xs font-semibold text-slate-500">32px</span>
            <span class="h-2 w-16 rounded bg-sky-600"></span>
        </div>
    </div>
</section>
