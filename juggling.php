<?php
$title = 'juggling';

$topic = 'Type Juggling';

$instruction = "
<p>PHP does not require one to declare the type of a variable, this is automatically done by the compiler based on how it is used</p>
<p>i.e if a string is aggigned to a variable <code>\$var</code>, the it is a string type but if an integer is assigned it is now an int type.</p>
<ul>
The casts allowed are:

    <li>(int), (integer) - cast to int</li>
    <li>(bool), (boolean) - cast to bool</li>
    <li>(float), (double), (real) - cast to float</li>
    <li>(string) - cast to string</li>
    <li>(array) - cast to array</li>
    <li>(object) - cast to object</li>
<p>To force a variable to be evaluated as a certain type, use type casting</p>
<p></p>
</ul>
";

$syntax = "";

$test = <<<'TEST'
&lt;?php<br>


$foo = "1";  // $foo is string (ASCII 49)<br>
$foo *= 2;   // $foo is now an integer (2)<br>
$foo = $foo * 1.3;  // $foo is now a float (2.6)<br>
$foo = 5 * "10 Little Piggies"; // $foo is integer (50)<br>
$foo = 5 * "10 Small Pigs";     // $foo is integer (50)<br><br>

Type Casting<br>

$foo = 10;   // $foo is an integer<br>
$bar = (boolean) $foo;   // $bar is a boolean<br>

<br>?&gt;
TEST;

$prev = 'declarations';

$next = 'basics';

include 'index.php';