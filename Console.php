<?php
/* php-console-color
 * Author: Cory Thompson (CoryJThompson)
 * https://github.com/coryjthompson/php-console-color
 */
class Console {

	public static function write($text, $color = null){
		if($color == null){
			return $text;
		}
		return print "\033[".$color."m" . $text . "\033[37m";
	}

	public static function writeLine($text, $color = null){
		return Console::write($text."\n", $color);
	}

	public static function writeTitle($title, $color = null){
		Console::writeLine("---------------------------", $color);
		Console::writeLine($title, $color);
		Console::writeLine("---------------------------", $color);
	}
}

class ConsoleColor {
	const black = '30';
	const red = '31';
	const green = '32';
	const brown = '33';
	const blue = '34'; 
	const purple = '35';
	const cyan = '36';
	const white = '37';
}
