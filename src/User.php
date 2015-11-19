<?php
namespace Noichl\Blog;

/**
 * Class User represents an Blog User
 * @package Noichl\Blog
 */
class User {

	/**
	 * @var MailAddress
	 */
	private $mailAddress;

	/**
	 * User constructor.
	 *
	 * @param \Noichl\Blog\MailAddress $mailAddress
	 */
	public function __construct(\Noichl\Blog\MailAddress $mailAddress) {
		$this->mailAddress = $mailAddress;
	}

	/**
	 * Checks if a user is generally allowed to publish and has this capabilities.
	 * @return bool True if he can publish.
	 */
	public function canPublish(): \bool {
		// normal user can't publish
		return FALSE;
	}
}