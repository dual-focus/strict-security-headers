<?php
/**
 * Strict-Transport-Security Header
 *
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Strict-Transport-Security
 *
 * @package StrictSecurityHeaders
 * @author Dual Focus <support@dualfocus.dev>
 */

namespace DualFocus\StrictSecurityHeaders;

/**
 * StrictTransportSecurity Header Class
 */
class StrictTransportSecurity extends Header {
	/**
	 * Header name.
	 *
	 * @var string
	 */
	protected $name = 'Strict-Transport-Security';

	/**
	 * Header value.
	 *
	 * @var string
	 */
	protected $value = 'max-age=2592000; includeSubDomains; preload';
}
