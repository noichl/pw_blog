<?php
namespace Noichl\Blog;

class MailAddressTest extends \PHPUnit_Framework_TestCase {

	public function validMailAddressesProvider() {
		return [
			['name@domain.com'],
		];
	}

	public function inValidMailAddressesProvider() {
		return [
			['name@'],
			['name@domain'],
			['@domain.de'],
			['test@'],
			['test@test.t'],
			['www.test.de'],
			[''],
			[FALSE],
			[TRUE],
		];
	}

	/**
	 * @dataProvider validMailAddressesProvider
	 */
	public function testAcceptsValidMailAddress($testAddress) {
		$mail = new MailAddress($testAddress);
		$this->assertEquals($testAddress, (string)$mail);
	}

	/**
	 * @dataProvider inValidMailAddressesProvider
	 * @expectedException \InvalidArgumentException
	 */
	public function testThrowsExceptionOnInvalidMailAddress($testAddress) {
		$mail = new MailAddress($testAddress);
	}
}
