<?php
/**
 * Design system section: Form inputs.
 *
 * @package Eltronix
 */

declare(strict_types=1);

if (! defined('ABSPATH')) {
    exit;
}
?>
<section class="rounded-2xl border border-slate-200 p-6" aria-labelledby="ds-form-inputs-title">
    <header class="mb-5">
        <h2 id="ds-form-inputs-title" class="text-2xl font-semibold text-slate-900"><?php esc_html_e('Form Inputs', 'eltronix'); ?></h2>
        <p class="mt-2 text-sm text-slate-600"><?php esc_html_e('Reference form controls for search, account, and checkout interactions.', 'eltronix'); ?></p>
    </header>

    <form class="grid gap-4 sm:grid-cols-2" action="#" method="post">
        <div>
            <label class="mb-2 block text-sm font-medium text-slate-700" for="ds-name"><?php esc_html_e('Full Name', 'eltronix'); ?></label>
            <input id="ds-name" type="text" class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm text-slate-900 placeholder-slate-400 focus:border-sky-500 focus:outline-none focus:ring-2 focus:ring-sky-200" placeholder="Jane Doe">
        </div>
        <div>
            <label class="mb-2 block text-sm font-medium text-slate-700" for="ds-email"><?php esc_html_e('Email', 'eltronix'); ?></label>
            <input id="ds-email" type="email" class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm text-slate-900 placeholder-slate-400 focus:border-sky-500 focus:outline-none focus:ring-2 focus:ring-sky-200" placeholder="jane@example.com">
        </div>
        <div class="sm:col-span-2">
            <label class="mb-2 block text-sm font-medium text-slate-700" for="ds-message"><?php esc_html_e('Message', 'eltronix'); ?></label>
            <textarea id="ds-message" class="min-h-28 w-full rounded-lg border border-slate-300 px-3 py-2 text-sm text-slate-900 placeholder-slate-400 focus:border-sky-500 focus:outline-none focus:ring-2 focus:ring-sky-200" placeholder="Write your message"></textarea>
        </div>
    </form>
</section>
