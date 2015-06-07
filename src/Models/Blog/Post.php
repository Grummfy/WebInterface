<?php

namespace WebInterface\Models\Blog;

use WebInterface\Models\Common\Message;
use WebInterface\Models\Common\Thread;

interface Post extends Message
{
	/**
	 * @return Thread
	 */
	public function getCommentThread();

	/**
	 * @return String
	 */
	public function getTitle();
}
