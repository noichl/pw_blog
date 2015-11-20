<?php
namespace Noichl\Blog;
use Noichl\Blog\Exception\AccessException;

/**
 * Class Blog represents a blog.
 * @package Noichl\Blog
 */
class Blog {

	/**
	 * @var string
	 */
	private $name;

	/**
	 * @var Article[]
	 */
	private $articles;

	/**
	 * @var User
	 */
	private $owner;

	/**
	 * Blog constructor.
	 *
	 * @param string $name The name of the blog
	 * @param User $owner The owner of the blog
	 */
	public function __construct(\string $name, User $owner) {
		$this->name = $name;
		$this->owner = $owner;
		$this->articles = array();
	}


	/**
	 * Gets the name of the blog.
	 *
	 * @return string
	 */
	public function getName(): \string {
		return $this->name;
	}

	/**
	 * Gets an array containing all articles corresponding to the blog.
	 *
	 * @return Article[]
	 */
	public function getArticles(): array {
		return $this->articles;
	}

	/**
	 * Publishes an article on this blog.
	 *
	 * @param Article $article The article to add
	 * @param User $user The user who adds the article
	 *
	 * @throws AccessException
	 */
	public function publishArticleFromUser(Article $article, User $user) {
		if (!$this->isUserAllowedToPublish($user)) {
			throw new AccessException('Access Denied', 1447939963359);
		}

		array_push($this->articles, $article);
	}

	/**
	 * Checks if a user is allowed to publish on this blog.
	 *
	 * @param User $user
	 *
	 * @return bool TRUE if the user is allowed
	 */
	private function isUserAllowedToPublish(User $user) {
		return ($user->canPublish() || $this->owner === $user);
	}
}