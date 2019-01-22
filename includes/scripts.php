<?php

function rng_scripts() {
    //enqueue styles
}
add_action("wp_enqueue_scripts", "rng_scripts");

function admin_script($hook) {
  //enqueue scripts
}
add_action('admin_enqueue_scripts', 'admin_script');
