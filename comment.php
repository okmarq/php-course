<?php
$title = 'comment';

$topic = 'Comments';

$instruction = "<p>in a php file commented lines will be ignored, it is a good way to document your code while you work.</p>
<p>this <code>// </code> or <code>#</code> will comment out a line. while this <code>/* ... */</code> will comment out multiple lines</p>

<p>there's also the advanved escaping using conditions. <b>this is your homework</b></p>";

$test = '<code>
&lt;?php<br> 1. /* <br>
2. echo "some code line"; <br>
3. another line of code... <br>
4. all will get commented out;<br>
5. and get ignored by php<br> 
6. */ <br>
7. // single line commented out<br>
8. # single line commented out<br>
?&gt;
</code>';

$prev = 'escaping';

$next = 'types';

include 'index.php';