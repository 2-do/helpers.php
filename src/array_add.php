<?php
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
