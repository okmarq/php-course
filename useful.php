<?php
$title = 'useful';

$topic = 'Something Useful';

$instruction = "<p>Let's check the browser we are using with some php code.</p>
<p>store the following code in a variable and echo the variable.</p>
<code>\$_SERVER['HTTP_USER_AGENT']</code>";

$test = $_SERVER['HTTP_USER_AGENT'];

$prev = 'hello';

$next = 'escaping';

include 'index.php';