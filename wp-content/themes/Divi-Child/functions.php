<?php
/* ------------------------------
    Child Theme Code
--------------------------------- */

/* Get Parent Theme */
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}

/* ------------------------------
    Custom Footer Menu/Option
--------------------------------- */

function divi_footer_admin_menu_init() {

add_submenu_page( 'options-general.php', 'Footer', 'Footer', 'manage_options', 'divi-footer-settings', 'divi_footer_menu_init' );
add_submenu_page( 'et_divi_options',__( 'Footer Settings', 'Divi' ), __( 'Footer Settings', 'Divi' ), 'manage_options', 'options-general.php?page=divi-footer-settings', 'divi_footer_menu_init' );

}



add_action( 'admin_menu', 'divi_footer_admin_menu_init' );

function divi_footer_menu_init() {
    echo '<div class="wrap">';
    echo '<h2>Footer Settings</h2>';
      echo '<form action="options.php" method="POST">';
      settings_fields( 'divi_footer_settings_group' );
      do_settings_sections( 'divi-footer-settings' );
      submit_button();
      echo '</form>';
    echo '</div>';
}


function divi_footer_settings_init() {
    register_setting( 'divi_footer_settings_group', 'divi_footer_settings_content' );
    add_settings_section( 'section-one', '', 'divi_footer_section_init', 'divi-footer-settings' );
    add_settings_field( 'divi_footer_settings_content', 'Footer Content', 'divi_footer_field_init', 'divi-footer-settings', 'section-one' );
}

add_action( 'admin_init', 'divi_footer_settings_init' );

function divi_footer_field_init() {
    $options = get_option( 'divi_footer_settings_content' );
    echo '<input name="divi_footer_settings_content" type="text" value="' . $options . '" id="divi_footer_settings_content">';
    echo '<p>Current Footer Preview: ' . $options . '</p>';
}

?>
