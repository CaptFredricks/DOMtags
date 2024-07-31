<?php
/**
 * DOMtag functions. This file can be removed in live environments providing there is already a method of autoloading classes.
 * @since 1.1.0
 *
 * @author Jace Fincham
 * @package DomTags
 */

// Absolute path to the root directory
define('PATH', dirname(__DIR__));

// Path to the `includes` directory
define('INC', '/includes');

/**
 * Autoload a class.
 * @since 1.1.0
 *
 * @param string $class -- The name of the class.
 */
spl_autoload_register(function(string $class) {
	$file = PATH . INC . getClassFilename($class);
	
	if(isset($file) && file_exists($file)) require $file;
});

/**
 * Construct a class' filename.
 * @since 1.1.0
 *
 * @param string $name -- The name of the class.
 * @return string
 */
function getClassFilename(string $name): string {
	$is_interface = false;
	
	$name = str_replace('\\', '/', $name);
	$path = array();
	
	if(str_contains($name, '/')) {
		$raw_path = explode('/', $name);
		$name = array_pop($raw_path);
		
		foreach($raw_path as $p)
			$path[] = formatPathFragment($p);
	}
	
	if(str_ends_with($name, 'Interface')) {
		$is_interface = true;
		$name = substr($name, 0, strpos($name, 'Interface'));
	}
	
	$name = formatPathFragment($name);
	$path = slash(implode('/', $path));
	$path = !str_starts_with($path, '/') ? '/' . $path : $path;
	
	return $path . ($is_interface ? 'interface-' : 'class-') . $name . '.php';
}

/**
 * Format a fragment of a file path.
 * @since 1.1.0
 *
 * @param string $frag -- The file path fragment.
 * @return string
 */
function formatPathFragment(string $frag): string {
	preg_match_all('/[A-Z][a-z]+/', $frag, $matches, PREG_SET_ORDER);
	
	if(count($matches) > 1) {
		$first_match = implode('', array_shift($matches));
		$m_string = '';
		
		foreach($matches as $match)
			$m_string .= '-' . implode('', $match);
		
		$frag = $first_match . $m_string;
	}
	
	return strtolower($frag);
}

/**
 * Remove a trailing slash from a string.
 * @since 1.1.0
 *
 * @param string $text -- The text string.
 * @return string
 */
function unslash(string $text): string {
	return rtrim($text, '/\\');
}

/**
 * Add a trailing slash to a string.
 * @since 1.1.0
 *
 * @param string $text -- The text string.
 * @return string
 */
function slash(string $text): string {
	return unslash($text) . '/';
}