<?php
/**
 * The <tr> DOMtag.
 * @since 1.1.2
 *
 * @author Jace Fincham
 * @package DomTags
 */
namespace DomTags;

class TableRowTag extends \DomTag implements DomTagInterface {
	/**
	 * Construct the DOMtag.
	 * @since 1.1.2
	 *
	 * @access public
	 * @param array|null $args (optional) -- The list of arguments.
	 * @return string
	 */
	public static function tag(?array $args = null): string {
		return parent::constructTag('tr', self::props(), $args);
	}
	
	/**
	 * The tag's props.
	 * @since 1.1.2
	 *
	 * @access public
	 * @return array
	 */
	public static function props(): array {
		return parent::ALWAYS_WL;
	}
}