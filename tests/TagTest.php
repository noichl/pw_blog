<?php
namespace Noichl\Blog;

class TagTest extends \PHPUnit_Framework_TestCase {
	const TAG_NAME = 'TestTag';

	/**
	 * @var Tag
	 */
	private $tag;

	protected function setUp() {
		$this->tag = new Tag(self::TAG_NAME);
	}

	public function testToStringReturnsTagName() {
		$this->assertEquals(self::TAG_NAME, (string)$this->tag);
	}

	public function testGetName() {
		$this->assertEquals(self::TAG_NAME, $this->tag->getName());
	}
}
