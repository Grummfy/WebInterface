<?php

namespace WebInterface\Models\CMS;

use WebInterface\Models\Common\HasMetaData;
use WebInterface\Models\CMS\Node;

interface Page extends HasMetaData
{
	/**
	 * @return Collection<Node>
	 */
	public function getNodes();
}
