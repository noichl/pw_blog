<?php
namespace Noichl\Blog;

use Noichl\Blog\User\Author;

class BlogTest extends \PHPUnit_Framework_TestCase {
	const BLOG_NAME = 'Test Blog';

	/**
	 * @var User
	 */
	private $owner;

	/**
	 * @var Blog
	 */
	private $blog;

	protected function setUp() {
		$this->owner = new User(new MailAddress('test@domain.de'));
		$this->blog = new Blog(self::BLOG_NAME, $this->owner);
	}

	public function testGetName() {
		$this->assertEquals(self::BLOG_NAME, $this->blog->getName());
	}

	/**
	 * @expectedException \Noichl\Blog\Exception\AccessException
	 */
	public function testNormalUserCantPublish() {
		$testUser = new User(new MailAddress('normal@user.de'));
		$article = new Article('test article', 'the body');
		$this->blog->publishArticleFromUser($article, $testUser);
	}

	public function testOwnerCanPublish() {
		$testAuthor = new Author(new MailAddress('normal@author.de'));
		$article = new Article('test article', 'the body');

		$this->assertCount(0, $this->blog->getArticles());
		$this->blog->publishArticleFromUser($article, $testAuthor);
		$this->assertCount(1, $this->blog->getArticles());
	}

	public function testAuthorCanPublish() {
		$article = new Article('test article', 'the body');

		$this->assertCount(0, $this->blog->getArticles());
		$this->blog->publishArticleFromUser($article, $this->owner);
		$this->assertCount(1, $this->blog->getArticles());
	}
}
