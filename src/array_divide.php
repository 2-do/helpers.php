<?php
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
