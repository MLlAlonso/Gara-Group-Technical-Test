<?php

class Velovita_Menu_Walker extends Walker_Nav_Menu {

    public function start_lvl(&$output, $depth = 0, $args = null) {
        $output .= '<ul class="ml-4 space-y-2">';
    }

    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = implode(' ', $item->classes);
        $output .= '<li class="nav-item ' . esc_attr($classes) . '">';

        $atts = '';
        $atts .= !empty($item->url) ? ' href="' . esc_url($item->url) . '"' : '';
        $atts .= ' class="text-graydark hover:text-orange transition-colors"';

        $output .= '<a' . $atts . '>';
        $output .= esc_html($item->title);
        $output .= '</a>';
    }

    public function end_el(&$output, $item, $depth = 0, $args = null) {
        $output .= '</li>';
    }
}
