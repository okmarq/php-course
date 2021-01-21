<!DOCTYPE html>
<html>
<head>
	<style type="text/css"></style>
	<title><?php echo $title = $title ?? 'Laravel Okmarq' ?></title>
</head>
<body>
	<h1>PHP Tutorial</h1>
	<p>by <em><strong>Joel Okoromi</strong></em> <small>(laravel)</small></p>

	<h2><?php echo $topic = $topic ?? 'Welcome' ?></h2>
	<?php
	if ($title) {
		echo $instruction = $instruction ?? 'instructions, coming soon';

		echo $syntax = $syntax ?? 'syntax may or may not be present at the moment';
		echo "<br>";
		echo $test = $test ?? 'test, coming soon';
	?>
	<p>previous: <a href='<?php echo $prev = $prev ?? 'intro' ?>.php'><?php echo $prev ?></a></p>
	<p>next: <a href='<?php echo $next = $next ?? 'intro' ?>.php'><?php echo $next ?></a></p>
	<?php } ?>

</body>
</html>