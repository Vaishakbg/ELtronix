<?php
/**
 * Design system section: Cards.
 *
 * @package Eltronix
 */

declare(strict_types=1);

if (! defined('ABSPATH')) {
    exit;
}
?>
<section class="rounded-2xl border border-slate-200 p-6" aria-labelledby="ds-cards-title">
    <header class="mb-5">
        <h2 id="ds-cards-title" class="text-2xl font-semibold text-slate-900"><?php esc_html_e('Cards', 'eltronix'); ?></h2>
        <p class="mt-2 text-sm text-slate-600"><?php esc_html_e('Card patterns for products, promotions, and editorial content.', 'eltronix'); ?></p>
    </header>

    <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
        <article class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm">
            <h3 class="text-lg font-semibold text-slate-900"><?php esc_html_e('Standard Card', 'eltronix'); ?></h3>
            <p class="mt-2 text-sm text-slate-600"><?php esc_html_e('Used for simple content blocks with one clear action.', 'eltronix'); ?></p>
            <a href="#" class="mt-4 inline-block text-sm font-semibold text-sky-700 hover:text-sky-800"><?php esc_html_e('Learn more', 'eltronix'); ?></a>
        </article>
        <article class="rounded-xl border border-slate-200 bg-slate-50 p-4">
            <p class="text-xs font-semibold uppercase tracking-wide text-slate-500"><?php esc_html_e('Featured', 'eltronix'); ?></p>
            <h3 class="mt-2 text-lg font-semibold text-slate-900"><?php esc_html_e('Promo Card', 'eltronix'); ?></h3>
            <p class="mt-2 text-sm text-slate-600"><?php esc_html_e('Supports campaign messaging with stronger visual hierarchy.', 'eltronix'); ?></p>
        </article>
        <article class="rounded-xl border border-slate-900 bg-slate-900 p-4 text-white">
            <h3 class="text-lg font-semibold"><?php esc_html_e('Inverted Card', 'eltronix'); ?></h3>
            <p class="mt-2 text-sm text-slate-200"><?php esc_html_e('For high-contrast highlight areas and status panels.', 'eltronix'); ?></p>
        </article>
    </div>
</section>
