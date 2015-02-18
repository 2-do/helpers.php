# helpers.php
helpers.php is a PHP file with some functions you might need.

# Helpers

### snake_case
Translate a string into snake case
like: `snakeCase` => `snake_case`
```
snake_case('helloWorld'); // returns: hello_world
```

### camel_case
Translate a string into camel case
like: `camel_case` => `camelCase`
```
camel_case('hello_world'); // returns: helloWorld
```

### dd
Dumps out all the arguments and end execution
like: `dd(array('foo' => 'bar'), true, false, null, 'test');` returns:
```
array(1) {
  ["foo"]=> string(3) "bar"
}
bool(true)
bool(false)
NULL
string(4) "test"
```

### array_add
Adds a key to the array if not allready exists
like:
```
$array = array('foo' => 'bar');
$array = array_add($array, 'key', 'value');
```

### array_devide
Splits a array into two arrays, one with keys and one with values
like:
```
$array = array('foo' => 'bar');
list($keys, $values) = array_divide($array);
```
