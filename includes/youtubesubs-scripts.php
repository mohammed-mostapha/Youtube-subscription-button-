<?php

//Add scripts

function subscription_scripts() {
     // Add Main CSS
        wp_enqueue_style('yts-main-style' , plugins_url() . '/youtubesubs/css/style.css'); // telling WP to go to the plugins directory

     // Add Main JS
        wp_enqueue_script('yts-main-script' , plugins_url() . '/youtubesubs/js/main.js'); // telling WP to go to the plugins directory

   // Add google script
   wp_register_script('google' , 'https://apis.google.com/js/platform.js');
   wp_enqueue_script('google');

}

add_action('wp_enqueue_scripts' , 'subscription_scripts');

