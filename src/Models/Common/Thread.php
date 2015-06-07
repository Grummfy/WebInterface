<?php

namespace WebInterface\Models\Common;

/**
 * A thread is a container for messages
 * @package WebInterface\Models\Common
 */
interface Thread extends HasMetaData
{
	/**
	 * @return Collection<Message>
	 */
	public function getMessages();

	/**
	 * @return string
	 */
	public function getTopic();
}
