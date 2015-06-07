<?php

namespace WebInterface\Models\Forum;

use WebInterface\Models\Category;
use WebInterface\Models\Common\Thread;

interface Forum extends Category
{
	/**
	 * @return Collection<Thread>
	 */
	public function getThreads();
}
