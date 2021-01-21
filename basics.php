<?php
$title = 'basics';

$topic = 'Basics';

$instruction = '
<p> Variables in PHP are represented by a dollar sign followed by the name of the variable. The variable name is case-sensitive.
</p>
<p>Variable names follow the same rules as other labels in PHP. A valid variable name starts with a letter or underscore, followed by any number of letters, numbers, or underscores. As a regular expression, it would be expressed thus: ^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$</p>
<ul>
	<li></li>
	<li></li>
<p></p>
<p></p>
</ul>
';

$syntax = "";

$test = <<<'TEST'
&lt;?php<br>

$var = 'Bob';<br>
$Var = 'Joe';<br>
echo "$var, $Var";      // outputs "Bob, Joe"<br>

$4site = 'not yet';     // invalid; starts with a number<br>
$_4site = 'not yet';    // valid; starts with an underscore<br>
$täyte = 'mansikka';    // valid; 'ä' is (Extended) ASCII 228.<br>
<br>
One important thing to note is that only named variables may be assigned by reference. <br>
$foo = 25;<br>
$bar = &$foo;      // This is a valid assignment.<br>
$bar = &(24 * 7);  // Invalid; references an unnamed expression.<br>
<br>
function test()<br>
{<br>
   return 25;<br>
}<br>
<br>
$bar = &test();    // Invalid.<br>

<br>?&gt;
TEST;

$prev = 'variables';

$next = 'predefined-variables';

include 'index.php';