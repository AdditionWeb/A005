<?php

function a005_customizer_options( $wp_customize ) {
    $wp_customize->add_setting('a005_socials_youtube', array(
        'type' => 'option',
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'a005_socials_youtube', array(
        'label' => __('YouTube link', 'a005'),
        'section' => 'zerif_general_socials_section',
        'settings' => 'a005_socials_youtube',
        'type' => 'text',
        'priority' => 10
    )));
}
    
add_action( 'customize_register', 'a005_customizer_options' );
?>