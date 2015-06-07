<?php

namespace WebInterface\Models;

use WebInterface\Models\Common\Container;
use WebInterface\Models\Common\HasMetaData;

interface Category extends Container, HasMetaData
{
	/**
	 * @return string
	 */
	public function getDisplayableName();
}
