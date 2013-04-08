<?php
	require_once("Console.php");
	Console::writeTitle('Title Example', ConsoleColor::purple);
	Console::writeLine('Blue with new line', ConsoleColor::blue);
	Console::write('Red one line');
	Console::newLine();
	$input = Console::input('Your name: ');
	echo 'Hello ' . $input;
?>
