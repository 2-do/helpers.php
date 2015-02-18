<?php

/**
 * Translate a string into snake case
 * like: snakeCase => snake_case
 *
 * @param   string  $str  string in camel case format
 * @return  string  $str  translated into snake case format
 */
function snake_case($str) {
  $str[0] = strtolower($str[0]);
  $func = create_function('$c', 'return "_" . strtolower($c[1]);');
  return preg_replace_callback('/([A-Z])/', $func, $str);
}

/**
 * Translate a string into camel case
 * like: camel_case => camelCase
 *
 * @param   string  $str  string in snake case format
 * @return  string  $str  translated into camel case format
 */
function camel_case($str) {
  $str[0] = strtolower($str[0]);
  $func = create_function('$c', 'return "_" . strtolower($c[1]);');
  return preg_replace_callback('/([A-Z])/', $func, $str);
}

/**
 * Dumps out all the arguments and end execution
 * like: dd(array('foo' => 'bar'), true, false, null, 'test');
 *
 * @param   array   $array  the array to add the given key to
 * @param   string  $key    the key to add into the array if not exists
 * @param   string  $value  the value for the key in array
 * @return  array   $array  the array in return
 */
function dd()
{
  $args = func_get_args();
  call_user_func_array('var_dump', $args);
  die();
}

/**
 * Adds a key to the array if not allready exists
 * like: 
 *      $array = array('foo' => 'bar');
 *      $array = array_add($array, 'key', 'value');
 *
 * @param   array   $array  the array to add the given key to
 * @param   string  $key    the key to add into the array if not exists
 * @param   string  $value  the value for the key in array
 * @return  array   $array  the array in return
 */
function array_add($array, $key, $value)
{
	if (!isset($array[$key]))
	{
		$array[$key] = $value;
	}
	
	return $array;
}

/**
 * Splits a array into two arrays, one with keys and one with values
 * like: 
 * 	$array = array('foo' => 'bar');
 * 	list($keys, $values) = array_divide($array);
 *
 * @param   array   $array   the array to split
 * @return  array   array()  returns a array with keys and values
 */
function array_divide($array)
{
  $keys = array();
  $values = array();
  
	foreach ($array AS $key => $value)
	{
	  $keys[] => $key;
	  $values[] => $values;
	}
	
	return array($keys, $values);
}
