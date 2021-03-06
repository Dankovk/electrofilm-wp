<?php

global $wp_filesystem;

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

include_once ABSPATH . 'wp-admin/includes/file.php';

/**
 * Class SearchWPDebug is responsible for various debugging operations
 */
class SearchWPDebug {

	public $active;
	private $logfile;
	private $remoteMeta;
	private $apiPrefix = 'swpapi';

	function init( $dir ) {
		global $wp_filesystem;

		$this->active = true;
		$this->logfile = trailingslashit( $dir ) . 'debug.log';

		// init environment
		if( ! file_exists( $this->logfile ) ) {
			WP_Filesystem();
			if( ! $wp_filesystem->put_contents( $this->logfile, '' ) ); {
				$this->active = false;
			}
		}

		// after determining whether we can write to the logfile, add our action
		if( $this->active ) {
			add_action( 'searchwp_log', array( $this, 'log' ), 1, 2 );
		}
	}

	function log( $message = '', $type = 'notice' ) {
		global $wp_filesystem;
		WP_Filesystem();

		// if we're not active, don't do anything
		if ( ! $this->active || ! file_exists( $this->logfile ) ) {
			return false;
		}

		// get the existing log
		$existing = $wp_filesystem->get_contents( $this->logfile );

		// format our entry
		$entry = '[' . date( 'Y-d-m G:i:s', current_time( 'timestamp' ) ) . '][' . sanitize_text_field( $type ) . ']';

		// flag it with the process ID
		$entry .= '[' . SearchWP::instance()->getPid() . ']';

		// sanitize the message
		$message = sanitize_text_field( esc_html( $message ) );
		$message = str_replace( '=&gt;', '=>', $message ); // put back array identifiers
		$message = str_replace( '-&gt;', '->', $message ); // put back property identifiers
		$message = str_replace( '&#039;', "'", $message ); // put back apostrophe's

		// finally append the message
		$entry .= ' ' . $message;

		// append the entry
		$log = $existing . "\n" . $entry;

		// write log
		$wp_filesystem->put_contents( $this->logfile, $log );
	}

}
