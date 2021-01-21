<?php
$title = 'numstr';

$topic = 'Numeric strings';

$instruction = "<p>A PHP string is considered numeric if it can be interpreted as an int or a float.</p>";

$syntax = '';

$foo = '';

$test = <<<'TEST'
&lt;?php<br>
$foo = 1 + "10.5"; // $foo is float (11.5) <br>
$foo = 1 + "-1.3e3"; // $foo is float (-1299) <br>
$foo = 1 + "bob-1.3e3"; // TypeError as of PHP 8.0.0, $foo is integer (1) previously <br>
$foo = 1 + "bob3"; // TypeError as of PHP 8.0.0, $foo is integer (1) previously <br>
$foo = 1 + "10 Small Pigs"; // $foo is integer (11) and an E_WARNING is raised in PHP 8.0.0, E_NOTICE previously <br>
$foo = 4 + "10.2 Little Piggies"; // $foo is float (14.2) and an E_WARNING is raised in PHP 8.0.0, E_NOTICE previously <br>
$foo = "10.0 pigs " + 1; // $foo is float (11) and an E_WARNING is raised in PHP 8.0.0, E_NOTICE previously <br>
$foo = "10.0 pigs " + 1.0; // $foo is float (11) and an E_WARNING is raised in PHP 8.0.0, E_NOTICE previously
<br>?&gt;
TEST;

$prev = 'strings';

$next = 'arrays';

include 'index.php';