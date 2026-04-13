<?php

/**
 * The main template file
 * MVC Pattern: Controller logic to switch view based on language
 */

get_header();

// Load the unified view (Localization is handled via JSON Translator)

get_template_part('template-parts/home/hero');
get_template_part('template-parts/home/feature-poparty');

get_footer();
