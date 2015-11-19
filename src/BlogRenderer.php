<?php
namespace Noichl\Blog;

/**
 * Class BlogRenderer contains functionality to render a blog.
 * @package Noichl\Blog
 */
class BlogRenderer {

	/**
	 * @var Console
	 */
	private $console;

	/**
	 * BlogRenderer constructor.
	 *
	 * @param Console $console
	 */
	public function __construct(Console $console) {
		$this->console = $console;
	}

	/**
	 * Renders a blog on the specified console
	 *
	 * @param Blog $blog
	 */
	public function render(Blog $blog) {
		$this->console->printLine('Blog: ' . $blog->getName());
		$this->console->newLine();

		foreach ($blog->getArticles() as $article) {
			$this->printArticle($article);
		}
	}

	/**
	 * Prints an article.
	 *
	 * @param $article Article
	 */
	private function printArticle(Article $article) {
		$this->console->printLine('-');
		$this->console->printLine($article->getHeadline());
		$this->console->printLine('Tags: ' . implode(', ', $article->getTags()));
		$this->console->printLine($article->getBody());
	}
}