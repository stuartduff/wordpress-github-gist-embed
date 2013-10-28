<?php

if ( ! defined( 'ABSPATH' ) ) exit; // protect file from direct access

/**
 * Github_Gist_Embed
 *
 * @package WordPress
 * @subpackage Github_Gist_Embed
 * @category Plugin
 * @author Stuart Duff
 * @since 1.0
 */ 

class Github_Gist_Embed {

	// Main Plugin _construct function 
    public function __construct( ) {

    	// load plugin textdomain
		load_plugin_textdomain( 'github-gist-embed', false, dirname( plugin_basename( __FILE__ ) ) . '/lang/' );

		// Initiate plugin github gist embed function
        add_action( 'init', array( &$this, 'register_github_gist_embed' ) );
 
    }

	/**
	 * Register gist embed function.
	 * @access public
	 * @since 1.0
	 * @return void
	 */
	public function register_github_gist_embed () {

		// Register github gist embed function 
		wp_embed_register_handler( 'gist', '#https://gist\.github\.com/(.+?)/([\d]+)(\?file=.*)?#i',  array( &$this, 'wp_embed_handler_github_gist' ) );

	}

	/**
	 * add gist via wp function.
	 * @access public
	 * @since 1.0
	 * @return void
	 */
	public function wp_embed_handler_github_gist( $matches, $attr, $url, $rawattr ) {
		 
		$embed = sprintf(
		'<script type="text/javascript" src="https://gist.github.com/%1$s/%2$s.js%3$s"></script>',
		esc_attr( $matches[1] ),
		esc_attr( $matches[2] ),
		esc_attr( $matches[3] )
		);
	 
		return apply_filters( 'embed_gist', $embed, $matches, $attr, $url, $rawattr );
	}	

 
} // END class Github_Embed