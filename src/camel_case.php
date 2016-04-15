<?php
/**
 * Translate a string into camel case
 * like: camel_case => camelCase.
 *
 * @param string $str string in snake case format
 *
 * @return string $str  translated into camel case format
 */
function camel_case($str)
{
    $str[0] = strtolower($str[0]);
    $func = create_function('$c', 'return "_" . strtolower($c[1]);');

    return preg_replace_callback('/([A-Z])/', $func, $str);
}
