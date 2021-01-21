<?php
$title = 'arrays';

$topic = 'Arrays';

$instruction = "<p> An array in PHP is actually an ordered map. A map is a type that associates values to keys. This type is optimized for several different uses; it can be treated as an array, list (vector), hash table (an implementation of a map), dictionary, collection, stack, queue, and probably more. As array values can be other arrays, trees and multidimensional arrays are also possible.</p>";

$syntax = <<<'SYNTAX'
An array can be created using the <code>array()</code> language construct. It takes any number of comma-separated <code>key => value</code> pairs as arguments.
<code>
array(<br>
    key  => value,<br>
    key2 => value2,<br>
    key3 => value3,<br>
    ...<br>
)<br>
</code>
<p><strong>Note</strong>: A short array syntax exists which replaces <code>array()</code> with <code>[]</code>.</p>
SYNTAX;
$test = <<<'TEST'
&lt;?php<br>

$array = array(<br>
    "foo" => "bar",<br>
    "bar" => "foo",<br>
);<br>

// Using the short array syntax<br>
$array = [<br>
    "foo" => "bar",<br>
    "bar" => "foo",<br>
];

<br>?&gt;<br>
The key can either be an int or a string. The value can be of any type.<br>

when array keys are the same, only the last used will have its value displayed. the others will be overwritten.<br>
you can also have an array with only values and no key specified. php will automatically specify a value starting at 0.<br>
<code>$array = array("foo", "bar", "hello", "world");</code><br>


Array elements can be accessed using the <code>array[key]</code> syntax.<br>

To remove a key/value pair, call the <code>unset()</code>  function on it.<br>

you can reindex an array using <code>array_values()</code> to have the index start from zero.<br>

TEST;

$prev = 'numstr';

$next = 'iterables';

include 'index.php';
