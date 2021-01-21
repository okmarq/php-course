<?php
$title = 'iterables';

$topic = 'Iterables';

$instruction = "<p>Iterable is a pseudo-type introduced in PHP 7.1. It accepts any array or object implementing the Traversable interface. Both of these types are iterable using foreach and can be used with yield from within a generator. </p>";

$test = <<<'TEST'
&lt;?php<br>



<br>?&gt;
TEST;

$prev = 'arrays';

$next = 'objects';

include 'index.php';