<?php
$title = 'int';

$topic = 'Integers';

$instruction = "<p>An int is a number of the set <code>ℤ</code> = <code>{..., -2, -1, 0, 1, 2, ...}</code>.</p>
<p>To specify a bool literal, use the constants <code>true</code> or <code>false</code>. Both are case-insensitive.</p>";

$test = '
&lt;?php<br>
$a = 1234; // decimal number<br>
$a = 0123; // octal number (equivalent to 83 decimal)<br>
$a = 0x1A; // hexadecimal number (equivalent to 26 decimal)<br>
$a = 0b11111111; // binary number (equivalent to 255 decimal)<br>
$a = 1_234_567; // decimal number (as of PHP 7.4.0)<br>
?&gt;
';

$prev = 'bool';

$next = 'float';

include 'index.php';