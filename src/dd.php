<?php
/**
 * Dumps out all the arguments and end execution
 * like: dd(array('foo' => 'bar'), true, false, null, 'test');.
 *
 * @param array  $array the array to add the given key to
 * @param string $key   the key to add into the array if not exists
 * @param string $value the value for the key in array
 *
 * @return array $array  the array in return
 */
function dd()
{
    $args = func_get_args();
    call_user_func_array('var_dump', $args);
    die();
}
