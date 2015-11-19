<?php
namespace Noichl\Blog;

/**
 * Class Console representing a console line interface.
 *
 * The class contains functionality to interact whith the ordinary console line interface.
 *
 * @package Noichl\Blog
 */
class Console {

	/**
	 * Prints the given string on the console and adds afterwards a linebreak.
	 *
	 * @param string $line The line to print.
	 */
	public function printLine(\string $line) {
		echo $line;
		$this->newLine();
	}

	/**
	 * Prints a linebreak
	 */
	public function newLine(){
		echo PHP_EOL;
	}
}