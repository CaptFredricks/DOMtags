<?php
/**
 * The <link> DOMtag.
 * @since 1.2.0
 *
 * @author Jace Fincham
 * @package DomTags
 */
namespace DomTags;

class LinkTag extends \DomTags implements DomTagInterface {
	/**
	 * Construct the DOMtag.
	 * @since 1.2.0
	 *
	 * @access public
	 * @param array|null $args (optional) -- The list of arguments.
	 * @return string
	 */
	public static function tag(?array $args = null): string {
		return parent::constructTag('link', self::props(), $args);
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
			array('href', 'type', 'rel', 'crossorigin')
		);
	}
}