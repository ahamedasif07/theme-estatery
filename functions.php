<?php

/**
 * Estatery theme functions and definitions
 * MVC Architecture: Entry point for core controllers
 */

// Include core classes (Manual autoloader for simplicity)
require_once get_template_directory() . '/inc/Core/Setup.php';
require_once get_template_directory() . '/inc/Core/Enqueue.php';
require_once get_template_directory() . '/inc/Core/I18n.php';
require_once get_template_directory() . '/inc/Core/Translator.php';

// Instantiate Core Controllers
new Estatery\Core\Setup();
new Estatery\Core\Enqueue();
new Estatery\Core\I18n();

// Global helper for translations (Like Next.js)
function t($key)
{
    return \Estatery\Core\Translator::getInstance()->t($key);
}


/**
 * Hero Section Customizer Settings
 * Path: Appearance > Customize > Hero Settings
 */
/**
 * Hero Section Customizer Settings
 * Path: Appearance > Customize > Hero Slider Images
 */
function hero_customizer_settings($wp_customize)
{
    $wp_customize->add_section('hero_settings', array(
        'title'    => 'Hero Slider Content',
        'priority' => 30,
    ));

    for ($i = 1; $i <= 5; $i++) {
        // --- 1. Image Control ---
        $wp_customize->add_setting("hero_bg_image_$i");
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "hero_bg_image_$i", array(
            'label'    => "Slider $i: Background Image",
            'section'  => 'hero_settings',
            'settings' => "hero_bg_image_$i",
        )));

        // --- 2. Title Control ---
        $wp_customize->add_setting("hero_title_$i", array('default' => 'Find Your Dream Apartment'));
        $wp_customize->add_control("hero_title_$i", array(
            'label'    => "Slider $i: Main Title",
            'section'  => 'hero_settings',
            'type'     => 'text',
        ));

        // --- 3. Subtitle Control ---
        $wp_customize->add_setting("hero_subtitle_$i", array('default' => 'Explore our luxury properties tailored to your lifestyle.'));
        $wp_customize->add_control("hero_subtitle_$i", array(
            'label'    => "Slider $i: Subtitle Text",
            'section'  => 'hero_settings',
            'type'     => 'textarea',
        ));
    }
}
add_action('customize_register', 'hero_customizer_settings');
