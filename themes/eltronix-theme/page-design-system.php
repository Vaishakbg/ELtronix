<?php
/**
 * Template Name: Design System
 * Template Post Type: page
 *
 * @package Eltronix
 */

declare(strict_types=1);

if (! defined('ABSPATH')) {
    exit;
}

get_header();
?>
<section class="mx-auto max-w-7xl px-4 py-10 sm:px-6 lg:px-8">
    <header class="mb-10 rounded-2xl border border-slate-200 bg-slate-50 p-6">
        <p class="text-sm font-semibold uppercase tracking-wide text-slate-600"><?php esc_html_e('Internal', 'eltronix'); ?></p>
        <h1 class="mt-2 text-3xl font-bold text-slate-900 sm:text-4xl"><?php esc_html_e('Eltronix Design System', 'eltronix'); ?></h1>
        <p class="mt-4 max-w-3xl text-sm leading-6 text-slate-700 sm:text-base">
            <?php esc_html_e('Single source of truth for theme UI primitives. Keep this page internal and do not add it to public navigation.', 'eltronix'); ?>
        </p>
    </header>

    <div class="space-y-8" aria-label="<?php esc_attr_e('Design system sections', 'eltronix'); ?>">
        <?php
        $design_system_sections = [
            'color-palette',
            'typography',
            'buttons',
            'form-inputs',
            'cards',
            'badges',
            'alerts',
            'spacing-scale',
        ];

        foreach ($design_system_sections as $section_slug) {
            get_template_part('template-parts/design-system/section', $section_slug);
        }
        ?>
    </div>
</section>
<?php
get_footer();
