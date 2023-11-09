<?php

//--------------------------------------------------
// Config

	$functions_file = realpath(__DIR__ . '/functions.php');

	require_once($functions_file);

//--------------------------------------------------
// Basic content tests

	echo "\n";

	$tests = [
			[
				'There are %d monkeys in the %s',
				[5, 'tree'],
				'There are 5 monkeys in the tree',
			],
			[
				'AAA %% %%%s CCC',
				['b'],
				'AAA % %b CCC',
			],
			[
				'AAA %% BBB "%s" CCC "%s" DDD "%1$s" EEE',
				[111, 222],
				'AAA % BBB "111" CCC "222" DDD "111" EEE',
			],
		];

	foreach ($tests as $test) {

		list($format, $args, $expected) = $test;

		$a = vsprintf($format, $args);
		$b = user_vsprintf($format, $args);

		if ($a === $b && $a === $expected) {
			echo 'Pass: ' . $a . "\n";
		} else {
			echo "\n";
			echo 'Fail:' . "\n";
			echo '  ' . $format . "\n";
			echo '  ' . $expected . "\n";
			echo '  ' . $a . "\n";
			echo '  ' . $b . "\n";
			echo "\n";
		}

	}

	echo "\n";
	exit();

//--------------------------------------------------
// Basic behaviour tests

	//--------------------------------------------------
	// Setup

		$format = 'There are %d monkeys in the %s';
		$args = [5, 'tree'];
		$expected = 'There are 5 monkeys in the tree';

	//--------------------------------------------------
	// vsprintf

		$output = user_vsprintf($format, $args);
		assert($output === $expected);

	//--------------------------------------------------
	// sprintf

		$output = user_sprintf($format, ...$args);
		assert($output === $expected);

	//--------------------------------------------------
	// vprintf

		ob_start();
		$return = user_vprintf($format, $args);
		$output = ob_get_clean();
		assert($return === strlen($expected));
		assert($output === $expected);

	//--------------------------------------------------
	// printf

		ob_start();
		$return = user_printf($format, ...$args);
		$output = ob_get_clean();
		assert($return === strlen($expected));
		assert($output === $expected);

//--------------------------------------------------
// Run tests from php-src

	// $test_script = realpath(__DIR__ . '/tests/run-tests.php');
	// $test_file   = realpath(__DIR__ . '/tests/run-tests.txt');
	//
	// passthru('php ' . $test_script . ' --show-diff -d auto_prepend_file=' . $functions_file . ' -r ' . $test_file);
	//
	// echo "\n";

?>