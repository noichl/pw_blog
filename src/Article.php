<?php
namespace Noichl\Blog;

/**
 * Class Article represents an blog-article.
 * @package Noichl\Blog
 */
class Article {

	/**
	 * @var string
	 */
	private $headline;

	/**
	 * @var string
	 */
	private $body;

	/**
	 * @var Tag[]
	 */
	private $tags;

	/**
	 * Article constructor.
	 *
	 * @param string $headline
	 * @param string $body
	 */
	public function __construct(\string $headline, \string $body) {
		$this->headline = $headline;
		$this->body = $body;
		$this->tags = array();
	}

	/**
	 * Gets the headline
	 */
	public function getHeadline(): \string {
		return $this->headline;
	}

	/**
	 * Gets the body
	 */
	public function getBody(): \string{
		return $this->body;
	}

	/**
	 * Gets an array containing all tags this article is related.
	 *
	 * @return Tag[]
	 */
	public function getTags(): array {
		return $this->tags;
	}

	/**
	 * Adds an tag to the article.
	 *
	 * @param \Noichl\Blog\Tag $tag
	 */
	public function addTag(Tag $tag){
		array_push($this->tags, $tag);
	}
}