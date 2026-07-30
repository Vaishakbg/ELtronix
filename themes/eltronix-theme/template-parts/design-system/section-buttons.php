<?php
/**
 * Design system section: Buttons.
 *
 * @package Eltronix
 */

declare(strict_types=1);

if (! defined('ABSPATH')) {
    exit;
}
?>
<section class="rounded-2xl border border-slate-200 p-6" aria-labelledby="ds-buttons-title">
    <header class="mb-5">
        <h2 id="ds-buttons-title" class="text-2xl font-semibold text-slate-900"><?php esc_html_e('Buttons', 'eltronix'); ?></h2>
        <p class="mt-2 text-sm text-slate-600"><?php esc_html_e('Primary, secondary, and subtle actions used in checkout and catalog flows.', 'eltronix'); ?></p>
    </header>

    <div class="flex flex-wrap items-center gap-3">
        <button type="button" class="rounded-lg bg-sky-600 px-4 py-2 text-sm font-semibold text-white hover:bg-sky-700 focus:outline-none focus:ring-2 focus:ring-sky-300"><?php esc_html_e('Primary', 'eltronix'); ?></button>
        <button type="button" class="rounded-lg border border-slate-300 bg-white px-4 py-2 text-sm font-semibold text-slate-900 hover:bg-slate-50 focus:outline-none focus:ring-2 focus:ring-slate-200"><?php esc_html_e('Secondary', 'eltronix'); ?></button>
        <button type="button" class="rounded-lg px-4 py-2 text-sm font-semibold text-slate-700 hover:bg-slate-100 focus:outline-none focus:ring-2 focus:ring-slate-200"><?php esc_html_e('Ghost', 'eltronix'); ?></button>
        <button type="button" disabled class="cursor-not-allowed rounded-lg bg-slate-200 px-4 py-2 text-sm font-semibold text-slate-500"><?php esc_html_e('Disabled', 'eltronix'); ?></button>
    </div>
</section>
