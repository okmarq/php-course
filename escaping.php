<?php
$title = 'escaping';

$topic = 'Escaping from HTML';

$instruction = "<p>php ignores everything outside its tags.</p>
<p>what this means is, php will not parse them but will output them on the browser.</p>
<p>there's also the advanved escaping using conditions. <b>this is your homework</b></p>";

$test = '<code>
&lt;p&gt;This is going to be ignored by PHP and displayed by the browser.&lt;/p&gt;<br>
&lt;?php echo "While this is going to be parsed."; ?&gt;<br>
&lt;p&gt;This will also be ignored by PHP and displayed by the browser.&lt;/p&gt;
</code>';

$prev = 'hello';

$next = 'comment';

include 'index.php';