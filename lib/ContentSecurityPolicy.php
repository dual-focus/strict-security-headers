<?php
/**
 * Content-Security-Policy Header
 *
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy
 *
 * @package StrictSecurityHeaders
 * @author Dual Focus <support@dualfocus.dev>
 */

namespace DualFocus\StrictSecurityHeaders;

/**
 * ContentSecurityPolicy Header Class
 */
class ContentSecurityPolicy extends Header {
	/**
	 * Header name.
	 *
	 * @var string
	 */
	protected $name = 'Content-Security-Policy';

	/**
	 * Header value.
	 *
	 * @var string
	 */
	protected $value = 'upgrade-insecure-requests';
}
