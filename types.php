<?php
$title = 'types';

$topic = 'Intro to Types';

$instruction = "<p>PHP supports ten primitive types.</p>
<p>Four scalar types: basic</p>
<ul>
	<li>bool</li>
	<li>int</li>
	<li>float</li>
	<li>string</li>
</ul>
<p>Four compound types: intermediate</p>
<ul>
	<li>array</li>
	<li>object</li>
	<li>callable (for advance)</li>
	<li>iterable (for advance)</li>
</ul>

<p>And finally two special types: advance</p>
<ul>
	<li>resource</li>
	<li>NULL</li>
</ul>
";

$test = 'The type of a variable is not usually set by the programmer; rather, it is decided at runtime by PHP depending on the context in which that variable is used';

$prev = 'comment';

$next = 'bool';

include 'index.php';