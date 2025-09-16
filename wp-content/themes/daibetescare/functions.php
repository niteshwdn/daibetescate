<?php 

// Theme setup
add_action('after_setup_theme', function () {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    register_nav_menus([
    'primary_menu' => __('Primary Menu', 'mytheme'),
    ]);
});


// Primary menu ke <a> tag me active class lagane ke liye
add_filter('nav_menu_link_attributes', function ($atts, $item, $args) {
    if ($args->theme_location === 'primary_menu') {
        $is_home = untrailingslashit($item->url) === untrailingslashit(home_url('/'));

        if (($is_home && is_front_page()) || array_intersect(['current-menu-item','current_page_item','current-menu-ancestor'], $item->classes)) {
            $atts['class'] = trim(($atts['class'] ?? '') . ' active');
        }
    }
    return $atts;
}, 10, 3);



// Header & Footer Customizer
add_action('customize_register', function($wp_customize) {

    // === Header Section ===
    $wp_customize->add_section('mytheme_header', [
        'title'    => 'Header Settings',
        'priority' => 30,
    ]);

    $header_fields = [
        'rs_logo'           => ['Upload Logo', 'image'],
        'rs_text'           => ['Logo Text', 'text'],
        'rs_contact_number' => ['Contact Number', 'text'],
        'rs_email'          => ['Email Address', 'email'],
        'rs_facebook'       => ['Facebook Link', 'url'],
        'rs_twitter'        => ['Twitter Link', 'url'],
        'rs_instagram'      => ['Instagram Link', 'url'],
        'rs_linkedin'       => ['LinkedIn Link', 'url'],
    ];

    foreach ($header_fields as $id => [$label, $type]) {
        $wp_customize->add_setting($id, ['default' => '', 'sanitize_callback' => 'sanitize_text_field']);
        if ($type === 'image') {
            $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $id, [
                'label' => $label, 'section' => 'mytheme_header', 'settings' => $id
            ]));
        } else {
            $wp_customize->add_control($id, [
                'label' => $label, 'section' => 'mytheme_header', 'type' => $type
            ]);
        }
    }

    // === Footer Section ===
    $wp_customize->add_section('mytheme_footer', [
        'title'    => 'Footer Settings',
        'priority' => 40,
    ]);

    $footer_fields = [
        'rs_footer_text' => ['Footer Text', 'text'],
        'rs_footer_copy' => ['Copyright Text', 'text'],
        'rs_address'     => ['address', 'Text'],
    ];

    foreach ($footer_fields as $id => [$label, $type]) {
        $wp_customize->add_setting($id, ['default' => '', 'sanitize_callback' => 'sanitize_text_field']);
        $wp_customize->add_control($id, [
            'label' => $label, 'section' => 'mytheme_footer', 'type' => $type
        ]);
    }
});

add_action('wp_enqueue_scripts', function () {
    // Main style.css
    wp_enqueue_style('theme-style', get_stylesheet_uri());
});


?>