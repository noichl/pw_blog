<?php
/**
 * Created by PhpStorm.
 * User: marinus
 * Date: 19.11.15
 * Time: 16:12
 */

namespace Noichl\Blog;


class UserTest extends \PHPUnit_Framework_TestCase {

	public function testUserCantPublish() {
		$mailAddress = $this->getMockBuilder(Mailaddress::class)
			->disableOriginalConstructor()
			->getMock();

		$user = new User($mailAddress);
		$this->assertFalse($user->canPublish());
	}
}
