<?php
/**
 * Header Interface
 *
 * @package StrictSecurityHeaders
 * @author Dual Focus <support@dualfocus.dev>
 */

namespace DualFocus\StrictSecurityHeaders;

/**
 * Header Interface Class
 */
interface HeaderInterface {

	/**
	 * HeaderInterface init
	 *
	 * @return void
	 */
	public function init();

	/**
	 * Add security headers on send_headers hook.
	 *
	 * @param object $wp Current WordPress environment instance (passed by reference).
	 *
	 * @return void
	 */
	public function send_header( $wp );
}
