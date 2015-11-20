<?php
/**
 * Created by PhpStorm.
 * User: marinus
 * Date: 20.11.15
 * Time: 10:18
 */

namespace Noichl\Blog;


class ConsoleTest extends \PHPUnit_Framework_TestCase {

	/**
	 * @var Console
	 */
	private $console;

	protected function setUp() {
		$this->console = new Console();
	}

	public function testPrintLineAddsLineBreakAtEndOfInputstring() {
		$testString = 'a test string';
		$this->console->printLine($testString);
		$this->expectOutputString($testString . PHP_EOL);
	}

	public function testAddsNewLine() {
		$this->console->newLine();
		$this->expectOutputString(PHP_EOL);
	}
}
