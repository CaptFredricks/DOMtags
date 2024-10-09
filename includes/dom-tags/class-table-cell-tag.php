<?php
/**
 * The <td|th> DOMtag.
 * @since 1.1.2
 *
 * @author Jace Fincham
 * @package DomTags
 */
namespace DomTags;

class TableCellTag extends \DomTag implements DomTagInterface {
	/**
	 * The tag types.
	 * @since 1.1.2
	 *
	 * @access private
	 * @var array
	 */
	private const TAG_TYPES = array('td', 'th');
	
	/**
	 * Construct the DOMtag.
	 * @since 1.1.2
	 *
	 * @access public
	 * @param array|null $args (optional) -- The list of arguments.
	 * @return string
	 */
	public static function tag(?array $args = null): string {
		$type = self::TAG_TYPES[1];
		
		if(isset($args['type']) && in_array($args['type'], self::TAG_TYPES, true))
			$type = $args['type'];
		
		return parent::constructTag($type, self::props(), $args);
	}
	
	/**
	 * The tag's props.
	 * @since 1.1.2
	 *
	 * @access public
	 * @return array
	 */
	public static function props(): array {
		return array_merge(
			parent::ALWAYS_WL,
			array('colspan', 'rowspan')
		);
	}
}