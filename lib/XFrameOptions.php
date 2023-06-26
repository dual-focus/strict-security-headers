<?php
/**
 * X-Frame-Options Header
 *
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/X-Frame-Options
 *
 * @package StrictSecurityHeaders
 * @author Dual Focus <support@dualfocus.dev>
 */

namespace DualFocus\StrictSecurityHeaders;

/**
 * XFrameOptions Header Class
 */
class XFrameOptions extends Header {
	/**
	 * Header name.
	 *
	 * @var string
	 */
	protected $name = 'X-Frame-Options';

	/**
	 * Header value.
	 *
	 * @var string
	 */
	protected $value = 'SAMEORIGIN';
}
