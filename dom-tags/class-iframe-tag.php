<?php
/**
 * The <iframe> DOMtag.
 * @since 1.2.0
 *
 * @author Jace Fincham
 * @package DomTags
 */
namespace DomTags;

class IframeTag extends \DomTags implements DomTagInterface {
	/**
	 * Construct the DOMtag.
	 * @since 1.2.0
	 *
	 * @access public
	 * @param array|null $args (optional) -- The list of arguments.
	 * @return string
	 */
	public static function tag(?array $args = null): string {
		return parent::constructTag('iframe', self::props(), $args);
	}
	
	/**
	 * The tag's props.
	 * @since 1.2.0
	 *
	 * @access public
	 * @return array
	 */
	public static function props(): array {
		return array_merge(
			parent::ALWAYS_WL,
			array('src', 'name', 'loading', 'allowfullscreen', 'width', 'height')
		);
	}
}