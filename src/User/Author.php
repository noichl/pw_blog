<?php
namespace Noichl\Blog\User;

use Noichl\Blog\User;

class Author extends User{

	/**
	 * Checks if a user is generally allowed to publish and has this capabilities.
	 * @return bool True if he can publish.
	 */
	public function canPublish(): \bool {
		// authors are allowed to publish
		return TRUE;
	}
}