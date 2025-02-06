<?php
/**
 * The <em|i> DOMtag.
 * @since 1.0.0
 *
 * @author Jace Fincham
 * @package DomTags
 */
namespace DomTags;

class EmTag extends \DomTags implements DomTagInterface {
	/**
	 * The tag types.
	 * @since 1.0.0
	 *
	 * @access private
	 * @var array
	 */
	private const TAG_TYPES = array('em', 'i');
	
	/**
	 * The current tag type.
	 * @since 1.2.0
	 *
	 * @access private
	 * @var string
	 */
	private static $tag_type;
	
	/**
	 * Construct the DOMtag.
	 * @since 1.0.0
	 *
	 * @access public
	 * @param array|null $args (optional) -- The list of arguments.
	 * @return string
	 */
	public static function tag(?array $args = null): string {
		self::$tag_type = self::TAG_TYPES[0];
		
		if(isset($args['tag_type']) && in_array($args['tag_type'], self::TAG_TYPES, true))
			self::$tag_type = $args['tag_type'];
		
		return parent::constructTag(self::$tag_type, self::props(), $args);
	}
	
	/**
	 * The tag's props.
	 * @since 1.0.0
	 *
	 * @access public
	 * @return array
	 */
	public static function props(): array {
		return parent::ALWAYS_WL;
	}
}