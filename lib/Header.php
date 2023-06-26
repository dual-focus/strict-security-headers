<?php
/**
 * Abstract Header class for Strict Security Headers.
 *
 * @package StrictSecurityHeaders
 * @author Dual Focus <support@dualfocus.dev>
 */

namespace DualFocus\StrictSecurityHeaders;

/**
 * Header Class
 */
abstract class Header implements HeaderInterface {
	/**
	 * Header name.
	 *
	 * @var string
	 */
	protected $name;

	/**
	 * Header value.
	 *
	 * @var string
	 */
	protected $value;

	/**
	 * Override current header value.
	 *
	 * @var string
	 */
	protected $override = true;

	/**
	 * Header constructor.
	 */
	public function __construct() {
		$filter_name = 'strict_security_headers_' . strtolower( str_replace( '-', '_', $this->name ) ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores

		$this->value    = \apply_filters( $filter_name . '_value', $this->value );
		$this->override = \apply_filters( $filter_name . '_override', $this->override );
	}

	/**
	 * Header init
	 *
	 * @return void
	 */
	public function init() {
		\add_action( 'send_headers', [ $this, 'send_header' ], 999999999 );
	}

	/**
	 * Add security headers on send_headers hook.
	 *
	 * @param object $wp Current WordPress environment instance (passed by reference).
	 *
	 * @return void
	 */
	public function send_header( $wp ) {
		if ( $this->can_send_header( $wp ) ) {
			header( "{$this->name}: {$this->value}" );
		}
	}

	/**
	 * Check if the header can be sent.
	 *
	 * @param object $wp Current WordPress environment instance (passed by reference).
	 *
	 * @return bool
	 */
	protected function can_send_header( $wp ) {
		return $this->is_not_feed( $wp ) && $this->supposed_to_send();
	}

	/**
	 * We do not want to modify headers on feeds.
	 *
	 * @param object $wp Current WordPress environment instance (passed by reference).
	 *
	 * @return bool
	 */
	protected function is_not_feed( $wp ) {
		return empty( $wp->query_vars['feed'] );
	}

	/**
	 * Ensure is supposed to be sent.
	 *
	 * @return bool
	 */
	protected function supposed_to_send() {
		$headers = array_map( fn( $header ) => trim( explode( ':', $header )[0] ), headers_list() );

		if ( in_array( $this->name, $headers, true ) ) {
			if ( ! $this->override ) {
				return false;
			} else {
				header_remove( $this->name );
			}
		}

		return true;
	}
}
