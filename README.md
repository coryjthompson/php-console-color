php-console-color
=================

Add pretty colors to php output console

Example 
-------

    Console::writeTitle('Title Example', ConsoleColor::purple);
    Console::writeLine('Blue with new line', ConsoleColor::blue);
    Console::write('Red one line', ConsoleColor::red);
    $input = Console::input('Your prompt: ', ConsoleColor::blue);
Avaliable Colors 
----------------
black, red, green, brown, blue, purple, cyan, white

