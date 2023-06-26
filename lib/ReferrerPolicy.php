<?php
/**
 * Referrer -Policy Header
 *
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Referrer-Policy
 *
 * @package StrictSecurityHeaders
 * @author Dual Focus <support@dualfocus.dev>
 */

namespace DualFocus\StrictSecurityHeaders;

/**
 * ReferrerPolicy Header Class
 */
class ReferrerPolicy extends Header {
	/**
	 * Header name.
	 *
	 * @var string
	 */
	protected $name = 'Referrer-Policy';

	/**
	 * Header value.
	 *
	 * @var string
	 */
	protected $value = 'strict-origin-when-cross-origin';
}
