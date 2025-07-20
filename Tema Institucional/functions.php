<?php
function meu_tema_bootstrap_scripts() {
    // Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css');

    // Tema CSS (vazio ou opcional)
    wp_enqueue_style('style', get_stylesheet_uri());

    // Bootstrap JS
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'meu_tema_bootstrap_scripts');

add_theme_support('title-tag');
add_theme_support('menus');
add_theme_support('post-thumbnails');

function meu_tema_register_menus() {
    register_nav_menus(array(
        'menu-principal' => __('Menu Principal', 'meu-tema-bootstrap')
    ));
}
add_action('after_setup_theme', 'meu_tema_register_menus');
class Bootstrap_Nav_Walker_NoUl extends Walker_Nav_Menu {
  // Trocar <ul> por <div class="navbar-nav">
  function start_lvl(&$output, $depth = 0, $args = null) {
    $output .= '';
  }
  function end_lvl(&$output, $depth = 0, $args = null) {
    $output .= '';
  }

  // Cada item <li> vira <div class="nav-item"> e link <a class="nav-link">
  function start_el(&$output, $item, $depth=0, $args=null, $id=0) {
    $output .= '<div class="nav-item">';
    $attributes  = !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';
    $title = apply_filters('the_title', $item->title, $item->ID);
    $output .= '<a class="nav-link"'. $attributes .'>'. $title .'</a>';
    $output .= '</div>';
  }
  function end_el(&$output, $item, $depth=0, $args=null) {
    // Nada para fechar (fechamos no start_el)
  }
  
}
