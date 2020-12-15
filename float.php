<?php
$title = 'float';

$topic = 'Floating point numbers';

$instruction = "<p>Floating point numbers (also known as \"floats\", \"doubles\", or \"real numbers\") can be specified using any of the following syntaxes <code>ℤ</code> = <code>{..., -2, -1, 0, 1, 2, ...}</code>.</p>
<p>To specify a bool literal, use the constants <code>true</code> or <code>false</code>. Both are case-insensitive.</p>";

$test = '
&lt;?php<br>
$a = 1.234;<br>
$b = 1.2e3;<br>
$c = 7E-10;<br>
$d = 1_234.567; // as of PHP 7.4.0<br>
?&gt;
';

$prev = 'int';

$next = 'string';

include 'index.php';