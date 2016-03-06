<?php
/**
 * Translate a string into snake case
 * like: snakeCase => snake_case.
 *
 * @param string $str string in camel case format
 *
 * @return string $str  translated into snake case format
 */
function snake_case($str)
{
    $str[0] = strtolower($str[0]);
    $func = create_function('$c', 'return "_" . strtolower($c[1]);');

    return preg_replace_callback('/([A-Z])/', $func, $str);
}
