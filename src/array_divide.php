<?php
/**
 * Adds a key to the array if not allready exists
 * like: 
 *      $array = array('foo' => 'bar');
 *      $array = array_add($array, 'key', 'value');
 *
 * @param   array   $array   the array to add the given key to
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
