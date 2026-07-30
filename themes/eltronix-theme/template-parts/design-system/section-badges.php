<?php
/**
 * Design system section: Badges.
 *
 * @package Eltronix
 */

declare(strict_types=1);

if (! defined('ABSPATH')) {
    exit;
}
?>
<section class="rounded-2xl border border-slate-200 p-6" aria-labelledby="ds-badges-title">
    <header class="mb-5">
        <h2 id="ds-badges-title" class="text-2xl font-semibold text-slate-900"><?php esc_html_e('Badges', 'eltronix'); ?></h2>
        <p class="mt-2 text-sm text-slate-600"><?php esc_html_e('Compact status and category indicators for products and notices.', 'eltronix'); ?></p>
    </header>

    <div class="flex flex-wrap gap-3">
        <span class="inline-flex items-center rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-700"><?php esc_html_e('Default', 'eltronix'); ?></span>
        <span class="inline-flex items-center rounded-full bg-emerald-100 px-3 py-1 text-xs font-semibold text-emerald-700"><?php esc_html_e('In Stock', 'eltronix'); ?></span>
        <span class="inline-flex items-center rounded-full bg-amber-100 px-3 py-1 text-xs font-semibold text-amber-700"><?php esc_html_e('Low Stock', 'eltronix'); ?></span>
        <span class="inline-flex items-center rounded-full bg-rose-100 px-3 py-1 text-xs font-semibold text-rose-700"><?php esc_html_e('Sold Out', 'eltronix'); ?></span>
    </div>
</section>
