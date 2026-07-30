<?php
/**
 * Design system section: Alerts.
 *
 * @package Eltronix
 */

declare(strict_types=1);

if (! defined('ABSPATH')) {
    exit;
}
?>
<section class="rounded-2xl border border-slate-200 p-6" aria-labelledby="ds-alerts-title">
    <header class="mb-5">
        <h2 id="ds-alerts-title" class="text-2xl font-semibold text-slate-900"><?php esc_html_e('Alerts', 'eltronix'); ?></h2>
        <p class="mt-2 text-sm text-slate-600"><?php esc_html_e('Feedback styles for success, warning, and error messaging.', 'eltronix'); ?></p>
    </header>

    <div class="space-y-3">
        <aside class="rounded-lg border border-emerald-200 bg-emerald-50 p-4 text-sm text-emerald-800" role="status">
            <?php esc_html_e('Success: Item was added to cart.', 'eltronix'); ?>
        </aside>
        <aside class="rounded-lg border border-amber-200 bg-amber-50 p-4 text-sm text-amber-800" role="status">
            <?php esc_html_e('Warning: Quantity is limited for this item.', 'eltronix'); ?>
        </aside>
        <aside class="rounded-lg border border-rose-200 bg-rose-50 p-4 text-sm text-rose-800" role="alert">
            <?php esc_html_e('Error: Payment authorization failed. Please retry.', 'eltronix'); ?>
        </aside>
    </div>
</section>
