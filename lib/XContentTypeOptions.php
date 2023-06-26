<?php
/**
 * X-Content-Type-Options Header
 *
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/X-Content-Type-Options
 *
 * @package StrictSecurityHeaders
 * @author Dual Focus <support@dualfocus.dev>
 */

namespace DualFocus\StrictSecurityHeaders;

/**
 * XContentTypeOptions Header Class
 */
class XContentTypeOptions extends Header {
	/**
	 * Header name.
	 *
	 * @var string
	 */
	protected $name = 'X-Content-Type-Options';

	/**
	 * Header value.
	 *
	 * @var string
	 */
	protected $value = 'nosniff';
}
