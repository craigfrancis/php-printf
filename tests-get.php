<?php

class tests_get {

	private $test_script_src = '../php.src/run-tests.php';
	private $test_folder_src = '../php.src/ext/standard/tests';
	private $test_folder_root = './tests';

	private $test_functions = ['sprintf', 'vsprintf', 'printf', 'vprintf', 'fprintf', 'vfprintf'];
	private $test_filename_regex = NULL;
	private $test_function_regex = NULL;
	private $test_files = [];
	private $test_limit = NULL; // ['printf.phpt', 'printf_64bit.phpt'];

	public function __construct() {
		$this->test_filename_regex = '/^(' . implode('|', $this->test_functions) . ').*\.phpt/i';
		$this->test_function_regex = '/\b(' . implode('|', $this->test_functions) . ')\(/i';
	}

	private function _files_remove($dir, $remove = false) {
		$dir = realpath($dir);
		if (str_starts_with($dir, $this->test_folder_root)) {
			foreach (scandir($dir) as $file) {
				if ($file != '.' && $file != '..') {
					$path = $dir . '/' . $file;
					if (is_dir($path)) {
						$this->_files_remove($path, true);
					} else {
						unlink($path);
					}
				}
			}
			if ($remove !== false) {
				rmdir($dir);
			}
		}
	}

	private function _files_find($dir) {
		foreach (scandir($dir) as $file) {
			if ($file != '.' && $file != '..') {
				$path = $dir . '/' . $file;
				if (is_dir($path)) {
					$this->_files_find($path);
				} else if (preg_match($this->test_filename_regex, $file) && ($this->test_limit === NULL || in_array($file, $this->test_limit))) {
					echo $file . "\n";
					$path_orig = $this->test_folder_root . '/orig/' . $file;
					$path_files = $this->test_folder_root . '/files/' . $file;
					copy($path, $path_orig);
					$this->_file_update($path_orig, $path_files);
					$this->test_files[] = $path_files;
				} else {
					// TODO: Look for other files, e.g. bug20108.phpt?
				}
			}
		}
	}

	private function _file_update($path_orig, $path_files) {

		$contents = file_get_contents($path_orig);

			// Probably should use /nikic/PHP-Parser/

		if (preg_match('/^--FILE--\n.*?^--/ms', $contents, $matches)) {
			$search = $matches[0];
			$replace = $search;
			$replace = preg_replace($this->test_function_regex, 'user_$1(', $replace);
			$replace = str_replace('user_sprintf(): Argument #1 ($format)', 'sprintf(): Argument #1 ($format)', $replace);
			$replace = preg_replace('/((?:\*\*\*|--) (?:Testing|Calling) )user_((?:sprintf|vsprintf|printf|vprintf|fprintf|vfprintf)\(\))/', '$1$2', $replace);
			$contents = str_replace($search, $replace, $contents);
		}

		if (preg_match('/^--EXPECT--\n.*/ms', $contents, $matches)) {
			$search = $matches[0];
			$replace = $search;
			$replace = str_replace('Argument #2 ($values) must be of type array, true given', 'Argument #2 ($values) must be of type array, bool given', $replace);
			$replace = str_replace('Argument #2 ($values) must be of type array, false given', 'Argument #2 ($values) must be of type array, bool given', $replace);
			$contents = str_replace($search, $replace, $contents);
		}

		file_put_contents($path_files, $contents);

	}

	public function run() {

		$this->test_folder_root = realpath($this->test_folder_root);

		$this->_files_remove($this->test_folder_root);

		mkdir($this->test_folder_root . '/orig/');
		mkdir($this->test_folder_root . '/files/');
		copy($this->test_script_src, $this->test_folder_root . '/run-tests.php');

		$this->_files_find($this->test_folder_src);

		file_put_contents($this->test_folder_root . '/run-tests.txt', implode("\n", $this->test_files));

	}

}

$tests_test = new tests_get();
$tests_test->run();

?>