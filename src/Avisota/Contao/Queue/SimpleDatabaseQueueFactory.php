<?php

/**
 * Avisota newsletter and mailing system
 * Copyright (C) 2013 Tristan Lins
 *
 * PHP version 5
 *
 * @copyright  bit3 UG 2013
 * @author     Tristan Lins <tristan.lins@bit3.de>
 * @package    avisota
 * @license    LGPL-3.0+
 * @filesource
 */

namespace Avisota\Contao\Queue;

use Avisota\Contao\Entity\Queue;
use Avisota\Queue\SimpleDatabaseQueue;

class SimpleDatabaseQueueFactory implements QueueFactoryInterface
{
	public function createQueue(Queue $queue)
	{
		global $container;

		return new SimpleDatabaseQueue(
			$container['doctrine.connection.default'],
			$queue->getSimpleDatabaseQueueTable(),
			true,
			$container['avisota.logger.queue'],
			$container['event-dispatcher']
		);
	}
}
