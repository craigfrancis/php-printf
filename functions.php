<?php

// php tests-run.php

function user_vsprintf(string $format, array $values): string {

		// https://github.com/php/php-src/blob/2b61f71046fc200484a491fe0389377021db4dbc/ext/standard/formatted_print.c#L425

	$locale = setLocale(LC_CTYPE, 0);
	setLocale(LC_CTYPE, 'C'); // For the ctype_* functions

	$output = '';

	$format_pos = 0;

	$current_arg = 0;

	while (true) {

		$temp_pos = strpos($format, '%', $format_pos);

		if ($temp_pos === false) {
			$output .= substr($format, $format_pos);
			break;
		}

		$output .= substr($format, $format_pos, ($temp_pos - $format_pos));

		$format_pos = ($temp_pos + 1); // Skip the '%'

		if ($format[$format_pos] === '%') { // Escaped, e.g. '%%'

			$output .= '%';

			$format_pos++;

		} else {

			$align_right = false;
			$adjusting = 0;
			$padding = ' ';
			$always_sign = 0;
			$exp_precision = 0;

			if (ctype_alpha($format[$format_pos])) {

				$width = 0;
				$precision = 0;
				$argnum = -1; // Next

			} else {

				// First look for argnum

					$digits = '';
					$temp_pos = $format_pos;
					while (ctype_digit($format[$temp_pos])) {
						$temp_pos++;
					}
					if ($format[$temp_pos] == '$') {
						$argnum = intval(substr($format, $format_pos, ($temp_pos - $format_pos)));
						if ($argnum <= 0) {
							error_log('Argument number specifier must be greater than zero and less than ' . PHP_INT_MAX);
							return NULL; // Invalid (goto fail)
						}
						$argnum--; // Actual argnum's use a 0 index
						$format_pos = ($temp_pos + 1); // Skip the '$'
					} else {
						$argnum = -1; // Next
					}

				// After argnum comes modifiers

					// TODO: https://github.com/php/php-src/blob/2b61f71046fc200484a491fe0389377021db4dbc/ext/standard/formatted_print.c#L480

				// After modifiers comes width

					// TODO: https://github.com/php/php-src/blob/2b61f71046fc200484a491fe0389377021db4dbc/ext/standard/formatted_print.c#L511

					$width = 0;

				// After width and argnum comes precision

					// TODO: https://github.com/php/php-src/blob/2b61f71046fc200484a491fe0389377021db4dbc/ext/standard/formatted_print.c#L550

					$precision = 0;

			}

			if ($format[$format_pos] == 'l') { // Ignore 'l', used to indicate a long number, e.g. '%ld' https://github.com/php/php-src/blob/2b61f71046fc200484a491fe0389377021db4dbc/ext/standard/formatted_print.c#L599
				$format_pos++;
			}

			if ($argnum === -1) {
				$argnum = $current_arg++;
			}
			// if (argnum >= argc) {
			// 	max_missing_argnum = MAX(max_missing_argnum, argnum);
			// 	continue;
			// }

			// TODO: Maybe use in_array()?
			// if ($expprec && $precision == -1 && $format[$format_pos] !== 'g' && $format[$format_pos] !== 'G' && $format[$format_pos] !== 'h' && $format[$format_pos] !== 'H') {
			// 	error_log('Precision -1 is only supported for %g, %G, %h and %H');
			// 	return NULL; // goto fail
			// }

			$tmp = $values[$argnum];

			switch ($format[$format_pos]) {
				case 's':
					// php_sprintf_appendstring

					$output .= strval($tmp);

					break;

				case 'd':
					// php_sprintf_appendint

					$output .= intval($tmp);

					break;

				case 'u':
					// php_sprintf_appenduint(&result, &outpos,
					// 					  zval_get_long(tmp),
					// 					  width, padding, alignment);

					break;

				case 'e':
				case 'E':
				case 'f':
				case 'F':
				case 'g':
				case 'G':
				case 'h':
				case 'H':
					// php_sprintf_appenddouble(&result, &outpos,
					// 						 zval_get_double(tmp),
					// 						 width, padding, alignment,
					// 						 precision, adjusting,
					// 						 *format, always_sign
					// 						);
					break;

				case 'c':
					// php_sprintf_appendchar(&result, &outpos,
					// 					(char) zval_get_long(tmp));
					break;

				case 'o':
					// php_sprintf_append2n(&result, &outpos,
					// 					 zval_get_long(tmp),
					// 					 width, padding, alignment, 3,
					// 					 hexchars, expprec);
					break;

				case 'x':
					// php_sprintf_append2n(&result, &outpos,
					// 					 zval_get_long(tmp),
					// 					 width, padding, alignment, 4,
					// 					 hexchars, expprec);
					break;

				case 'X':
					// php_sprintf_append2n(&result, &outpos,
					// 					 zval_get_long(tmp),
					// 					 width, padding, alignment, 4,
					// 					 HEXCHARS, expprec);
					break;

				case 'b':
					// php_sprintf_append2n(&result, &outpos,
					// 					 zval_get_long(tmp),
					// 					 width, padding, alignment, 1,
					// 					 hexchars, expprec);
					break;

				case '%':
					// php_sprintf_appendchar(&result, &outpos, '%');

					break;

				case '\0':
					// if (!format_len) {
					// 	zend_value_error("Missing format specifier at end of string");
					// 	goto fail;
					// }
					// ZEND_FALLTHROUGH;

				default:
					error_log('Unknown format specifier "' . $format[$format_pos] . '"');
					return NULL; // goto fail

			}

			$format_pos++;

		}

	}

	setLocale(LC_CTYPE, $locale); // TODO: The `return NULL` for `goto fail` won't reset this?

	return $output;

}

//--------------------------------------------------
// Provide the different printf functions:

	// vsprintf  | Return string   |                       | uses array of arguments
	// sprintf   | Return string   |                       |
	// vprintf   | Print string    | returns string length | uses array of arguments
	// printf    | Print string    | returns string length |
	// vfprintf  | Write to stream | returns string length | uses array of arguments
	// fprintf   | Write to stream | returns string length |

	function user_sprintf(string $format, mixed ...$values): string {
		return user_vsprintf($format, $values);
	}

	function user_vprintf(string $format, array $values): int {
		$output = user_vsprintf($format, $values);
		print($output);
		return strlen($output);
	}

	function user_printf(string $format, mixed ...$values): int {
		return user_vprintf($format, $values);
	}

	function user_vfprintf(...$args) {
		return vfprintf(...$args);
	}

	function user_fprintf(...$args) {
		return fprintf(...$args);
	}

?>