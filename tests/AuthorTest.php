<?php
namespace Noichl\Blog;

use Noichl\Blog\User\Author;

class AuthorTest extends \PHPUnit_Framework_TestCase {

	public function testAuthorCanPublish() {
		$mailAddress = $this->getMockBuilder(Mailaddress::class)
			->disableOriginalConstructor()
			->getMock();

		$user = new Author($mailAddress);
		$this->assertTrue($user->canPublish());
	}
}
