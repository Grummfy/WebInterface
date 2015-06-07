<?php

namespace WebInterface\Models\Common;

interface Container
{
	/**
	 * @return Collection|null
	 */
	public function getSubContainer();

	/**
	 * Is there any subContainer
	 * @return bool
	 */
	public function hasSubContainer();
}
