<?php
/**
 * This file is intended for testing purposes only. It can safely be deleted on installations.
 * @since 1.1.0
 *
 * @author Jace Fincham
 * @package DomTags
 */

require_once __DIR__ . '/includes/functions.php';
require_once PATH . INC . '/dom-tags.php';

// A simple demo
echo domTag('p', array(
	'content' => 'I\'m a paragraph DOMtag! Look at me!!'
));

echo domTag('input', array(
	'name' => 'test',
	'placeholder' => 'Hello world!',
	'autofocus' => 1
));