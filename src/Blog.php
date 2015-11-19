<?php
namespace Noichl\Blog;

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
	 * Blog constructor.
	 *
	 * @param string $name The name of the blog
	 */
	public function __construct($name) {
		$this->name = $name;
		$this->articles = array();
	}


	/**
	 * Gets the name of the blog.
	 *
	 * @return string
	 */
	public function getName(): \string{
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
	 * Adds an article to the blog
	 *
	 * @param \Noichl\Blog\Article $article The article to add
	 */
	public function addArticle(Article $article){
		array_push($this->articles, $article);
	}

}