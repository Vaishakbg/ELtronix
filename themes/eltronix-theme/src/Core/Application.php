<?php

namespace Eltronix\Core;

class Application
{
    public function boot(): void
    {
        add_action('after_setup_theme', function () {
            error_log('Eltronix Application Booted');
        });
    }
}
