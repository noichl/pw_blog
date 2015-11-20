<?php
namespace Noichl\Blog;

class ArticleTest extends \PHPUnit_Framework_TestCase {

	const HEADLINE = 'Article Headline';
	const BODY = 'The long body of this article';

	/**
	 * @var Article
	 */
	private $article;

	protected function setUp() {
		$this->article = new Article(self::HEADLINE, self::BODY);
	}

	public function testGetsHeadline() {
		$this->assertEquals(self::HEADLINE, $this->article->getHeadline());
	}

	public function testGetsBody() {
		$this->assertEquals(self::BODY, $this->article->getBody());
	}

	public function testAddTag() {
		$testTag = new Tag('TestTag');
		$this->article->addTag($testTag);

		$this->assertCount(1, $this->article->getTags());

		foreach ($this->article->getTags() as $tag) {
			$this->assertEquals($testTag, $tag);
		}
	}
}
