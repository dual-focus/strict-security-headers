<?php
/**
 * Permissions-Policy Header
 *
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Permissions-Policy
 *
 * @package StrictSecurityHeaders
 * @author Dual Focus <support@dualfocus.dev>
 */

namespace DualFocus\StrictSecurityHeaders;

/**
 * PermissionsPolicy Header Class
 */
class PermissionsPolicy extends Header {
	/**
	 * Header name.
	 *
	 * @var string
	 */
	protected $name = 'Permissions-Policy';

	/**
	 * Header value.
	 *
	 * @var string
	 */
	protected $value = 'geolocation=(self)';
}
