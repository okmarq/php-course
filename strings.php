<?php
$title = 'string';

$topic = 'Strings';

$instruction = "<p>A string is series of characters, where a character is the same as a byte.</p>
<p>A string literal can be specified in four different ways:</p>
<ul>
	<li>single quoted</li>
	<li>double quoted</li>
	<li>heredoc syntax: intermediate</li>
	<li>nowdoc syntax: intermediate</li>
</ul>
<p>The simplest way to specify a string is to enclose it in single quotes (the character ').</p>
<p>To specify a literal single quote, escape it with a backslash (\). To specify a literal backslash, double it (\\). All other instances of backslash will be treated as a literal backslash.</p>
<p>Another simple way to specify a string is to enclose it in double quotes (the character \").</p>
<p>The most important feature of double-quoted strings is the fact that variable names will be expanded</p>

<b>Heredoc: intermediate</b>
<p>A third way to delimit strings is the heredoc syntax: <code> <<< </code>. After this operator, an identifier is provided, then a newline. The string itself follows, and then the same identifier again to close the quotation.</p>";


$test = <<<'TEST'
&lt;?php<br>
echo 'this is a simple string';<br>
echo "this is a double quoted string";<br>
echo 'Arnold once said: "I'll be back"';<br>
echo backslash literal \\<br>
echo single quote literal \'<br>
echo double quote literal \"<br>
?&gt;
TEST;

$prev = 'float';

$next = 'numstr';

include 'index.php';