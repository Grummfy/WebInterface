<?php

namespace WebInterface\Models\Common;

interface Message extends HasMetaData
{
	/**
	 * @return mixed
	 */
	public function getBody();

	/**
	 * @return Author
	 */
	public function getAuthor();

	/**
	 * Get the body format : markdown, html, bbcode, ...
	 * @return string
	 */
	public function getFormat();
}
