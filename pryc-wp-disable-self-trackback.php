<?php
/*
 * Plugin Name: PRyC WP: Disable self trackback
 * Plugin URI: http://PRyC.eu
 * Description: Plugin disable self trackback (comments)
 * Author: PRyC
 * Author URI: http://PRyC.eu
 * Version: 1.0.1
 */

/* CODE: */

if ( ! defined( 'ABSPATH' ) ) exit;

function pryc_wp_disable_self_trackback( &$links ) {
    foreach ( $links as $l => $link )
        if ( 0 === strpos( $link, get_option( 'home' ) ) )
            unset($links[$l]);
}
add_action( 'pre_ping', 'pryc_wp_disable_self_trackback' );


/* END */
?>
