function azayd_enqueue_scripts() {
    wp_enqueue_script('responsive-menu', get_template_directory_uri() . '/js/responsive-menu.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'azayd_enqueue_scripts');