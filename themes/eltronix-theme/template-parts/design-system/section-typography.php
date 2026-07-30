<?php
/**
 * Design system section: Typography.
 *
 * @package Eltronix
 */

declare(strict_types=1);

if (! defined('ABSPATH')) {
    exit;
}
?>
<section class="rounded-2xl border border-slate-200 p-6" aria-labelledby="ds-typography-title">
    <header class="mb-5">
        <h2 id="ds-typography-title" class="text-2xl font-semibold text-slate-900"><?php esc_html_e('Typography', 'eltronix'); ?></h2>
        <p class="mt-2 text-sm text-slate-600"><?php esc_html_e('Use this hierarchy consistently for headings, body text, and supportive copy.', 'eltronix'); ?></p>
    </header>

    <div class="space-y-3">
        <p class="text-4xl font-bold text-slate-900">Heading XL</p>
        <p class="text-3xl font-semibold text-slate-900">Heading L</p>
        <p class="text-2xl font-semibold text-slate-900">Heading M</p>
        <p class="text-base leading-7 text-slate-700">Body copy: High-clarity text for product descriptions, guidance, and supporting UI text.</p>
        <p class="text-sm text-slate-500">Caption text for helper labels and metadata.</p>
    </div>
</section>
