<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

function my_theme_customize_register( $wp_customize ) {
    // Sezione Hero Header
    $wp_customize->add_section( 'hero_section', array(
        'title'       => __( 'Hero Section', 'theme_name' ),
        'priority'    => 30,
    ) );

    // Campo per il video di background (selezione dalla libreria media)
    $wp_customize->add_setting( 'hero_video_id', array(
        'default'           => '',
        'sanitize_callback' => 'absint',
    ) );
    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'hero_video_id', array(
        'label'    => __( 'Seleziona il video di background', 'theme_name' ),
        'section'  => 'hero_section',
        'settings' => 'hero_video_id',
        'mime_type' => 'video', // Permetti solo video
    ) ) );

    // Campo per l'immagine di fallback (già esistente)
    $wp_customize->add_setting( 'hero_image_fallback', array(
        'default' => '',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'hero_image_fallback', array(
        'label'    => __( 'Immagine di fallback', 'theme_name' ),
        'section'  => 'hero_section',
        'settings' => 'hero_image_fallback',
    ) ) );
}
add_action( 'customize_register', 'my_theme_customize_register' );


function ajouter_swiperjs_theme_enfant() {
    // Enqueue du CSS de SwiperJS
    wp_enqueue_style('swiper-css', 'https://unpkg.com/swiper/swiper-bundle.min.css', array(), null, 'all');

    // Enqueue du JS de SwiperJS
    wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), null, true);

    // Optionnel: Si vous avez un fichier JS personnalisé pour initialiser Swiper, vous pouvez l'ajouter également
    wp_enqueue_script('swiper-initialization', get_template_directory_uri() . '/js/swiper-init.js', array('swiper-js'), null, true);
}
add_action('wp_enqueue_scripts', 'ajouter_swiperjs_theme_enfant');
