<?php
/**
 * The <li> DOMtag.
 * @since 1.0.0
 *
 * @author Jace Fincham
 * @package DomTags
 */
namespace DomTags;

class ListItemTag extends \DomTags implements DomTagInterface {
	/**
	 * Construct the DOMtag.
	 * @since 1.0.0
	 *
	 * @access public
	 * @param array|null $args (optional) -- The list of arguments.
	 * @return string
	 */
	public static function tag(?array $args = null): string {
		return parent::constructTag('li', self::props(), $args);
	}
	
	/**
	 * The tag's props.
	 * @since 1.0.0
	 *
	 * @access public
	 * @return array
	 */
	public static function props(): array {
		return array_merge(
			parent::ALWAYS_WL,
			array('value')
		);
	}
}