<?php
$title = 'null';

$topic = 'Null';

$instruction = "
<p>The special null value represents a variable with no value. null is the only possible value of type null. </p>
<p>A variable is considered to be null if: </p>
<ul>
	<li> it has been assigned the constant <code>null</code>.</li>
	<li> it has not been set to any value yet.</li>
	<li>it has been <code>unset()</code>.</li>
<p></p>
<p></p>
</ul>
";

$test = <<<'TEST'
&lt;?php<br>

$var = NULL;

<br>?&gt;
TEST;

$prev = 'resources';

$next = 'callbacks';

include 'index.php';