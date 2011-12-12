<div id="tl_buttons">
	<a class="header_more" href="http://www.contao.org/erweiterungsliste/view/Avisota.<?php echo $GLOBALS['TL_LANGUAGE']; ?>.html" onclick="window.open(this.href); return false;">
		<?php echo $GLOBALS['TL_LANG']['avisota_update']['moreVersionUpdates']; ?>
	</a>
</div>

<?php echo $this->getMessages(); ?>

<h2 class="sub_headline"><?php echo $GLOBALS['TL_LANG']['avisota_update']['headline']; ?></h2>

<form id="avisota_update" action="contao/main.php?do=avisota_update" class="tl_form" method="get">
	<div class="tl_formbody_edit preview">

		<div class="versions">
			<div class="previous">
				<span class="title"><?php echo $GLOBALS['TL_LANG']['avisota_update']['previousVersion']; ?></span>
				<span class="version"><?php echo isset($GLOBALS['TL_CONFIG']['avisota_version']) ? $GLOBALS['TL_CONFIG']['avisota_version'] : $GLOBALS['TL_LANG']['avisota_update']['unknownVersion']; ?></span>
			</div>
			<div class="installed">
				<span class="title"><?php echo $GLOBALS['TL_LANG']['avisota_update']['installedVersion']; ?></span>
				<span class="version"><?php echo AVISOTA_VERSION; ?></span>
			</div>
		</div>

		<div class="updates">
			<?php $blnFirst = true; foreach ($this->updates as $strVersion): ?>
				<fieldset class="tl_<?php if ($blnFirst): ?>t<?php $blnFirst = false; endif; ?>box block update">
					<legend class="">
						<?php if (isset($GLOBALS['TL_CONFIG']['avisota_update'][$strVersion])
								&& $GLOBALS['TL_CONFIG']['avisota_update'][$strVersion]): ?>
							<?php echo $this->generateImage('system/modules/Avisota/html/updated.png', ''); ?>
						<?php else: ?>
							<input type="checkbox" name="update[]" value="<?php echo $strVersion; ?>" id="update_<?php echo $strVersion; ?>" checked="checked" onchange="this.checked = true;" />
						<?php endif; ?>
						<label for="update_<?php echo $strVersion; ?>"><?php echo $GLOBALS['TL_LANG']['avisota_update']['update'][$strVersion][0]; ?></label>
					</legend>
					<div class="description">
						<?php echo $GLOBALS['TL_LANG']['avisota_update']['update'][$strVersion][1]; ?>
					</div>
				</fieldset>
			<?php endforeach; ?>
		</div>

	</div>

	<div class="tl_formbody_submit">
		<div class="tl_submit_container">
			<input name="submit" class="tl_submit" accesskey="u" type="submit" value="<?php echo specialchars($GLOBALS['TL_LANG']['avisota_update']['doUpdate']); ?>" />
		</div>
	</div>
</form>