<?php
namespace Noichl\Blog;

/**
 * Class Tag represents a tag.
 *
 * A Tag conduce to organize and filter list of articles.
 * Objects relating to the same tag have commonalities which the tag describes.
 *
 * @package Noichl\Blog
 */
class Tag {

	/**
	 * @var string
	 */
	private $name;

	/**
	 * Tag constructor.
	 *
	 * @param string $name
	 */
	public function __construct(\string $name) {
		$this->name = $name;
	}

	/**
	 * Gets the name of the tag.
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Gets an string representation of the tag.
	 *
	 * @return string
	 */
	function __toString(): \string{
		return $this->getName();
	}


}