<?php

    function striped_wp_styles(){
        wp_enqueue_style('style_css',get_stylesheet());
        wp_enqueue_style('reset_css',get_stylesheet());
        wp_enqueue_style('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css',get_stylesheet());
    }

    add_action('wp_enqueue_style', 'striped_wp_styles');