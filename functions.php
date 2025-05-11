<?
function grupo_resurreccion_scripts() {
    wp_enqueue_style('menu-css', get_template_directory_uri() . '/css/menu.css');
    wp_enqueue_style('hero-css', get_template_directory_uri() . '/css/hero.css');
    // otros estilos si es necesario
}
add_action('wp_enqueue_scripts', 'grupo_resurreccion_scripts');
