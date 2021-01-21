<?php
$title = 'objects';

$topic = 'Objects';

$instruction = "<p>To create a new object, use the <code>new</code> statement to instantiate a class</p>
<p>If an object is converted to an object, it is not modified. If a value of any other type is converted to an object, a new instance of the <code>stdClass</code> built-in class is created. If the value was null, the new instance will be empty. An array converts to an object with properties named by keys and corresponding values. Note that in this case before PHP 7.2.0 numeric keys have been inaccessible unless iterated. </p>";

$test = <<<'TEST'
&lt;?php<br>

class foo<br>
{<br>
    function do_foo()<br>
    {<br>
        echo "Doing foo.";<br>
    }<br>
}<br>
<br>
$bar = new foo;<br>
$bar->do_foo();<br>

<br>?&gt;
TEST;

$prev = 'iterables';

$next = 'resources';

include 'index.php';