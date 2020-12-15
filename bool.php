<?php
$title = 'bool';

$topic = 'Booleans';

$instruction = "<p>This is the simplest type. A bool expresses a truth value. It can be either <code>true</code> or <code>false</code>.</p>
<p>To specify a bool literal, use the constants <code>true</code> or <code>false</code>. Both are case-insensitive.</p>";

$test = '
&lt;?php<br>
$foo = True; // assign the value TRUE to $foo<br>
?&gt;
';

$prev = 'types';

$next = 'int';

include 'index.php';