<?php
/**
 * The <section> DOMtag.
 * @since 1.0.1
 *
 * @author Jace Fincham
 * @package DomTags
 */
namespace DomTags;

class SectionTag extends \DomTags implements DomTagInterface {
	/**
	 * Construct the DOMtag.
	 * @since 1.0.1
	 *
	 * @access public
	 * @param array|null $args (optional) -- The list of arguments.
	 * @return string
	 */
	public static function tag(?array $args = null): string {
		return parent::constructTag('section', self::props(), $args);
	}
	
	/**
	 * The tag's props.
	 * @since 1.0.1
	 *
	 * @access public
	 * @return array
	 */
	public static function props(): array {
		return parent::ALWAYS_WL;
	}
}