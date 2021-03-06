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

namespace Avisota\Contao\DataContainer;

use Contao\Doctrine\ORM\EntityHelper;

class RecipientSource extends \Backend
{
	/**
	 * Import the back end user object
	 */
	public function __construct()
	{
		parent::__construct();
		$this->import('BackendUser', 'User');
	}

	/**
	 * @param \DataContainer $dc
	 */
	public function onload_callback($dc)
	{
		$source = $this->Database
			->prepare("SELECT * FROM orm_avisota_recipient_source WHERE id=?")
			->execute($dc->id);

		if ($source->next() && $source->filter) {
			switch ($source->type) {
				case 'integrated':
					MetaPalettes::appendFields(
						'orm_avisota_recipient_source',
						'integrated',
						'filter',
						array('integratedFilterByColumns')
					);
					break;

				case 'member':
					MetaPalettes::appendFields(
						'orm_avisota_recipient_source',
						'member',
						'filter',
						array('memberFilterByColumns')
					);
					MetaPalettes::appendFields(
						'orm_avisota_recipient_source',
						'memberByMailingLists',
						'filter',
						array('memberFilterByColumns')
					);
					MetaPalettes::appendFields(
						'orm_avisota_recipient_source',
						'memberByGroups',
						'filter',
						array('memberFilterByColumns')
					);
					MetaPalettes::appendFields(
						'orm_avisota_recipient_source',
						'memberByAll',
						'filter',
						array('memberFilterByColumns')
					);
					break;

			}
		}
	}

	/**
	 * @param \DataContainer $dc
	 */
	public function onsubmit_callback($dc)
	{
		if ($dc->getEnvironment()->getCurrentModel()->getProperty('sorting') == 0) {
			$source = $this->Database
				->execute("SELECT MAX(sorting) as sorting FROM orm_avisota_recipient_source");
			$this->Database
				->prepare("UPDATE orm_avisota_recipient_source SET sorting=? WHERE id=?")
				->execute($source->sorting > 0 ? $source->sorting * 2 : 128, $dc->id);
		}
	}


	/**
	 * Check permissions to edit table orm_avisota_recipient_source
	 */
	public function checkPermission()
	{
		if ($this->User->isAdmin) {
			return;
		}

		// TODO
	}


	/**
	 * Return the "toggle visibility" button
	 *
	 * @param array
	 * @param string
	 * @param string
	 * @param string
	 * @param string
	 * @param string
	 *
	 * @return string
	 */
	public function toggleIcon($row, $href, $label, $title, $icon, $attributes)
	{
		if (strlen($this->Input->get('tid'))) {
			$this->toggleVisibility($this->Input->get('tid'), ($this->Input->get('state') == 1));
			$this->redirect($this->getReferer());
		}

		// Check permissions AFTER checking the tid, so hacking attempts are logged
		if (!$this->User->isAdmin && !$this->User->hasAccess('orm_avisota_recipient_source::disable', 'alexf')) {
			return '';
		}

		$href .= '&amp;tid=' . $row['id'] . '&amp;state=' . ($row['disable'] ? '' : '1');

		if ($row['disable']) {
			$icon = 'invisible.gif';
		}

		return '<a href="' . $this->addToUrl($href) . '" title="' . specialchars(
			$title
		) . '"' . $attributes . '>' . $this->generateImage($icon, $label) . '</a> ';
	}


	/**
	 * Toggle the visibility of an element
	 *
	 * @param integer
	 * @param boolean
	 */
	public function toggleVisibility($id, $isVisible)
	{
		/*
		// Check permissions to edit
		$this->Input->setGet('id', $id);
		$this->Input->setGet('act', 'toggle');
		$this->checkPermission();

		// Check permissions to publish
		if (!$this->User->isAdmin && !$this->User->hasAccess('orm_avisota_recipient_source::disable', 'alexf')) {
			$this->log(
				'Not enough permissions to publish/unpublish newsletter recipient source ID "' . $id . '"',
				'orm_avisota_recipient_source toggleVisibility',
				TL_ERROR
			);
			$this->redirect('contao/main.php?act=error');
		}

		$this->createInitialVersion('orm_avisota_recipient_source', $id);

		// Trigger the save_callback
		if (is_array($GLOBALS['TL_DCA']['orm_avisota_recipient']['fields']['disable']['save_callback'])) {
			foreach ($GLOBALS['TL_DCA']['orm_avisota_recipient']['fields']['disable']['save_callback'] as $callback) {
				$this->import($callback[0]);
				$isVisible = $this->$callback[0]->$callback[1]($isVisible, $this);
			}
		}

		// Update the database
		$this->Database
			->prepare(
			"UPDATE orm_avisota_recipient_source SET tstamp=" . time() . ", disable='" . ($isVisible ? ''
				: 1) . "' WHERE id=?"
		)
			->execute($id);

		$this->createNewVersion('orm_avisota_recipient_source', $id);
		*/
	}

	public function getRecipientColumns()
	{
		$this->loadLanguageFile('orm_avisota_recipient');
		$this->loadDataContainer('orm_avisota_recipient');

		$options = array();

		foreach ($GLOBALS['TL_DCA']['orm_avisota_recipient']['fields'] as $k => $v) {
			if ($v['eval']['importable']) {
				$options[$k] = $v['label'][0];
			}
		}
		asort($options);

		return $options;
	}

	public function getRecipientFilterColumns()
	{
		$this->loadLanguageFile('orm_avisota_recipient');
		$this->loadDataContainer('orm_avisota_recipient');

		$options = array();

		foreach ($GLOBALS['TL_DCA']['orm_avisota_recipient']['fields'] as $k => $v) {
			$options[$k] = $v['label'][0] . ' (' . $k . ')';
		}
		asort($options);

		return $options;
	}

	public function getMemberFilterColumns()
	{
		$this->loadLanguageFile('tl_member');
		$this->loadDataContainer('tl_member');

		$options = array();

		foreach ($GLOBALS['TL_DCA']['tl_member']['fields'] as $k => $v) {
			$options[$k] = $v['label'][0] . ' (' . $k . ')';
		}
		asort($options);

		return $options;
	}
}
