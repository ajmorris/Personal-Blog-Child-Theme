<?php

add_action( 'wp_enqueue_scripts', 'my_stripe_enqueue_scripts', 99);
function my_stripe_enqueue_scripts() {

    // if ( !it_exchange_is_page( 'checkout' ) ||  !function_exists( 'it_exchange_stripe_addon_enqueue_script' ) ) {        
    if ( !it_exchange_is_page() ||  !function_exists( 'it_exchange_stripe_addon_enqueue_script' ) ) {
            
            wp_dequeue_script( 'stripe' );
            wp_dequeue_script( 'stripe-addon-js' );
    }

}




