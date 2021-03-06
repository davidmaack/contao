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

namespace Avisota\Contao\Message\Renderer;

use Avisota\Message\MessageInterface;
use Avisota\Renderer\DelegateMessageRenderer;
use Avisota\Renderer\MessageRendererInterface;

class ToOverwriteMessageRenderer extends DelegateMessageRenderer
{
	/**
	 * @var string
	 */
	protected $to;

	/**
	 * @var string
	 */
	protected $toName;

	function __construct(MessageRendererInterface $delegate, $to, $toName)
	{
		parent::__construct($delegate);
		$this->to     = (string) $to;
		$this->toName = (string) $toName;
	}

	/**
	 * @param string $replyTo
	 */
	public function setTo($replyTo)
	{
		$this->to = (string) $replyTo;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getTo()
	{
		return $this->to;
	}

	/**
	 * @param string $replyToName
	 */
	public function setToName($replyToName)
	{
		$this->toName = (string) $replyToName;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getToName()
	{
		return $this->toName;
	}

	/**
	 * {@inheritdoc}
	 */
	public function renderMessage(MessageInterface $message)
	{
		$swiftMessage = $this->delegate->renderMessage($message);

		$swiftMessage->setTo($this->to, $this->toName);

		return $swiftMessage;
	}
}
