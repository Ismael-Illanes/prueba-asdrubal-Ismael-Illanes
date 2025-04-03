<?php
function cargar_scripts() {
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/script.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'cargar_scripts');
?>
