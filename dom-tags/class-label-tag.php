<?php
/**
 * The <label> DOMtag.
 * @since 1.0.0
 *
 * @package DomTags
 */
namespace DomTags;

class LabelTag extends \DomTag implements DomTagInterface {
	/**
	 * Construct the DOMtag.
	 * @since 1.0.0
	 *
	 * @access public
	 * @param array|null $args (optional) -- The list of arguments.
	 * @return string
	 */
	public static function tag(?array $args = null): string {
		return parent::constructTag('label', self::props(), $args);
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
			array('for')
		);
	}
}