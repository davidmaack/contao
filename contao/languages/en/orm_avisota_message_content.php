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


/**
 * Fields
 */
$GLOBALS['TL_LANG']['orm_avisota_message_content']['invisible']       = array(
	'Invisible',
	'Invisible', 'Hide the element on the email.'
);
$GLOBALS['TL_LANG']['orm_avisota_message_content']['type']            = array(
	'Element type',
	'Please choose the type of content element.'
);
$GLOBALS['TL_LANG']['orm_avisota_message_content']['headline']        = array(
	'Headline', 'Here you can add a headline to the content element.'
);
$GLOBALS['TL_LANG']['orm_avisota_message_content']['text']            = array(
	'Text', 'You can use HTML tags to format the text.'
);
$GLOBALS['TL_LANG']['orm_avisota_message_content']['definePlain']     = array(
	'Define plain text',
	'Define custom plain text instead of generate it from html.'
);
$GLOBALS['TL_LANG']['orm_avisota_message_content']['plain']           = array(
	'Plain text',
	'Plain text without html formatting.'
);
$GLOBALS['TL_LANG']['orm_avisota_message_content']['personalize']     = array(
	'Personalisieren <strong style="color:red">REMOVE</strong>',
	'Hier können Sie auswählen, ob dieses Element personalisiert werden soll.'
);
$GLOBALS['TL_LANG']['orm_avisota_message_content']['addImage']        = array(
	'Add an image', 'Add an image to the content element.'
);
$GLOBALS['TL_LANG']['orm_avisota_message_content']['singleSRC']       = array(
	'Source file', 'Please select a file or folder from the files directory.'
);
$GLOBALS['TL_LANG']['orm_avisota_message_content']['alt']             = array(
	'Alternate text', 'Here you can enter an alternate text for the image (<em>alt</em> attribute).'
);
$GLOBALS['TL_LANG']['orm_avisota_message_content']['size']            = array(
	'Image width and height', 'Here you can set the image dimensions and the resize mode.'
);
$GLOBALS['TL_LANG']['orm_avisota_message_content']['imagemargin']     = array(
	'Image margin', 'Here you can enter the top, right, bottom and left margin.'
);
$GLOBALS['TL_LANG']['orm_avisota_message_content']['imageUrl']        = array(
	'Image link target', 'A custom image link target will override the lightbox link, so the image cannot be viewed fullsize anymore.'
);
$GLOBALS['TL_LANG']['orm_avisota_message_content']['floating']        = array(
	'Image alignment', 'Please specify how to align the image.'
);
$GLOBALS['TL_LANG']['orm_avisota_message_content']['caption']         = array(
	'Image caption', 'Here you can enter a short text that will be displayed below the image.'
);
$GLOBALS['TL_LANG']['orm_avisota_message_content']['listType']        = array(
	'List type', 'Please choose the type of list.'
);
$GLOBALS['TL_LANG']['orm_avisota_message_content']['listItems']       = array(
	'List items', 'If JavaScript is disabled, make sure to save your changes before modifying the order.'
);
$GLOBALS['TL_LANG']['orm_avisota_message_content']['tableitems']      = array(
	'Table items', 'If JavaScript is disabled, make sure to save your changes before modifying the order.'
);
$GLOBALS['TL_LANG']['orm_avisota_message_content']['summary']         = array(
	'Table summary', 'Please enter a short summary of the table and describe its purpose or structure.'
);
$GLOBALS['TL_LANG']['orm_avisota_message_content']['thead']           = array(
	'Add table header', 'Make the first row of the table the table header.'
);
$GLOBALS['TL_LANG']['orm_avisota_message_content']['tfoot']           = array(
	'Add table footer', 'Make the last row of the table the table footer.'
);
$GLOBALS['TL_LANG']['orm_avisota_message_content']['linkTitle']       = array(
	'Link title', 'The link title will be displayed instead of the target URL.'
);
$GLOBALS['TL_LANG']['orm_avisota_message_content']['embed']           = array(
	'Embed the link', 'Use the wildcard "%s" to embed the link in a phrase (e.g. <em>For more information please visit %s</em>).'
);
$GLOBALS['TL_LANG']['orm_avisota_message_content']['multiSRC']        = array(
	'Source files', 'Please select one or more files or folders from the files directory. If you select a folder, its files will be included automatically.'
);
$GLOBALS['TL_LANG']['orm_avisota_message_content']['perRow']          = array(
	'Thumbnails per row', 'The number of image thumbnails per row.'
);
$GLOBALS['TL_LANG']['orm_avisota_message_content']['sortBy']          = array(
	'Order by', 'Please choose the sort order.'
);
$GLOBALS['TL_LANG']['orm_avisota_message_content']['galleryHtmlTpl']  = array(
	'HTML Galerietemplate <strong style="color:red">REMOVE</strong>',
	'Hier können Sie das HTML Galerietemplate auswählen.'
);
$GLOBALS['TL_LANG']['orm_avisota_message_content']['galleryPlainTpl'] = array(
	'Plain Galerietemplate <strong style="color:red">REMOVE</strong>',
	'Hier können Sie das Plain Galerietemplate auswählen.'
);
$GLOBALS['TL_LANG']['orm_avisota_message_content']['protected']       = array(
	'Element schützen <strong style="color:red">REMOVE</strong>',
	'Das Inhaltselement nur bestimmten Gruppen anzeigen.'
);
$GLOBALS['TL_LANG']['orm_avisota_message_content']['groups']          = array(
	'Erlaubte Mitgliedergruppen <strong style="color:red">REMOVE</strong>',
	'Diese Gruppen können das Inhaltselement sehen.'
);
$GLOBALS['TL_LANG']['orm_avisota_message_content']['guests']          = array(
	'Nur Gästen anzeigen <strong style="color:red">REMOVE</strong>',
	'Das Inhaltselement verstecken sobald ein Mitglied angemeldet ist.'
);
$GLOBALS['TL_LANG']['orm_avisota_message_content']['cssID']           = array(
	'CSS ID/class', 'Here you can set an ID and one or more classes.'
);
$GLOBALS['TL_LANG']['orm_avisota_message_content']['space']           = array(
	'Space in front and after', 'Here you can enter the spacing in front of and after the content element in pixel. You should try to avoid inline styles and define the spacing in a style sheet, though.'
);
$GLOBALS['TL_LANG']['orm_avisota_message_content']['source']          = array(
	'Quelldateien <strong style="color:red">REMOVE</strong>',
	'Bitte wählen Sie die zu importierenden CSV-Dateien aus der Dateiübersicht.'
);
$GLOBALS['TL_LANG']['orm_avisota_message_content']['events']          = array(
	'Events <strong style="color:red">REMOVE</strong>',
	'Hier können Events gewählt werden, welche in den Message eingebunden werden sollen.'
);
$GLOBALS['TL_LANG']['orm_avisota_message_content']['news']            = array(
	'Nachrichten <strong style="color:red">REMOVE</strong>',
	'Hier können Nachrichten gewählt werden, welche in den Message eingebunden werden sollen.'
);
$GLOBALS['TL_LANG']['orm_avisota_message_content']['articleAlias']    = array(
	'Bezogener Artikel <strong style="color:red">REMOVE</strong>',
	'Bitte wählen Sie den Artikel aus, den Sie einfügen möchten.'
);


/**
 * Legends
 */
$GLOBALS['TL_LANG']['orm_avisota_message_content']['type_legend']      = 'Element type';
$GLOBALS['TL_LANG']['orm_avisota_message_content']['text_legend']      = 'Text';
$GLOBALS['TL_LANG']['orm_avisota_message_content']['image_legend']     = 'Image settings';
$GLOBALS['TL_LANG']['orm_avisota_message_content']['list_legend']      = 'List items';
$GLOBALS['TL_LANG']['orm_avisota_message_content']['table_legend']     = 'Table items';
$GLOBALS['TL_LANG']['orm_avisota_message_content']['tconfig_legend']   = 'Table configuration';
$GLOBALS['TL_LANG']['orm_avisota_message_content']['sortable_legend']  = 'Sorting options';
$GLOBALS['TL_LANG']['orm_avisota_message_content']['link_legend']      = 'Hyperlink settings';
$GLOBALS['TL_LANG']['orm_avisota_message_content']['imglink_legend']   = 'Image link settings';
$GLOBALS['TL_LANG']['orm_avisota_message_content']['template_legend']  = 'Template settings';
$GLOBALS['TL_LANG']['orm_avisota_message_content']['include_legend']   = 'Include settings';
$GLOBALS['TL_LANG']['orm_avisota_message_content']['protected_legend'] = 'Access protection';
$GLOBALS['TL_LANG']['orm_avisota_message_content']['expert_legend']    = 'Expert settings';
$GLOBALS['TL_LANG']['orm_avisota_message_content']['events_legend']    = 'Events';


/**
 * Reference
 */
$GLOBALS['TL_LANG']['orm_avisota_message_content']['anonymous']      = 'Anonym personalisieren, falls keine persönlichen Daten verfügbar sind <strong style="color:red">REMOVE</strong>';
$GLOBALS['TL_LANG']['orm_avisota_message_content']['private']        = 'Persönlich personalisieren, blendet das Element aus, wenn keine persönlichen Daten verfügbar sind <strong style="color:red">REMOVE</strong>';
$GLOBALS['TL_LANG']['orm_avisota_message_content']['cell']['body']   = 'Inhalt <strong style="color:red">REMOVE</strong>';
$GLOBALS['TL_LANG']['orm_avisota_message_content']['cell']['header'] = 'Kopfzeile <strong style="color:red">REMOVE</strong>';
$GLOBALS['TL_LANG']['orm_avisota_message_content']['cell']['footer'] = 'Fußzeile <strong style="color:red">REMOVE</strong>';
$GLOBALS['TL_LANG']['orm_avisota_message_content']['cell']['left']   = 'Linke Spalte <strong style="color:red">REMOVE</strong>';
$GLOBALS['TL_LANG']['orm_avisota_message_content']['cell']['right']  = 'Rechte Spalte <strong style="color:red">REMOVE</strong>';


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['orm_avisota_message_content']['new']         = array(
	'New element', 'Add a new content element'
);
$GLOBALS['TL_LANG']['orm_avisota_message_content']['show']        = array(
	'Element details', 'Show the details of content element ID %s'
);
$GLOBALS['TL_LANG']['orm_avisota_message_content']['cut']         = array(
	'Move element', 'Move content element ID %s'
);
$GLOBALS['TL_LANG']['orm_avisota_message_content']['copy']        = array(
	'Duplicate element', 'Duplicate content element ID %s'
);
$GLOBALS['TL_LANG']['orm_avisota_message_content']['delete']      = array(
	'Delete element', 'Delete content element ID %s'
);
$GLOBALS['TL_LANG']['orm_avisota_message_content']['edit']        = array(
	'Edit element', 'Edit content element ID %s'
);
$GLOBALS['TL_LANG']['orm_avisota_message_content']['pasteafter']  = array(
	'Paste at the top', 'Paste after content element ID %s'
);
$GLOBALS['TL_LANG']['orm_avisota_message_content']['pastenew']    = array(
	'Add new at the top', 'Add new after content element ID %s'
);
$GLOBALS['TL_LANG']['orm_avisota_message_content']['toggle']      = array(
	'Toggle visibility', 'Toggle the visibility of element ID %s'
);
$GLOBALS['TL_LANG']['orm_avisota_message_content']['editalias']   = array(
	'Edit source element', 'Edit the source element ID %s'
);
$GLOBALS['TL_LANG']['orm_avisota_message_content']['editarticle'] = array(
	'Edit article', 'Edit article ID %s'
);
