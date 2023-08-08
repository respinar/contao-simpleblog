<?php

/*
 * This file is part of Simple Blog for Contao.
 *
 * (c) Hamid Peywasti 2023 <hamid@respinar.com>
 *
 * @license MIT
 */

use Respinar\SimpleBlogBundle\Model\BlogArchiveModel;
use Respinar\SimpleBlogBundle\Model\BlogPostModel;

// Back end modules
$GLOBALS['BE_MOD']['content']['blog'] = array
(
	'tables'      => array('tl_blog_archive', 'tl_blog_post', 'tl_content'),
	// 'table'       => array(BackendCsvImportController::class, 'importTableWizardAction'),
	// 'list'        => array(BackendCsvImportController::class, 'importListWizardAction')
);

// Front end modules
$GLOBALS['FE_MOD']['blog'] = array
(
	// 'newslist'    => ModuleNewsList::class,
	// 'newsreader'  => ModuleNewsReader::class,
	// 'newsarchive' => ModuleNewsArchive::class,
	// 'newsmenu'    => ModuleNewsMenu::class
);

// Models
$GLOBALS['TL_MODELS']['tl_blog_archive'] = BlogArchiveModel::class;
$GLOBALS['TL_MODELS']['tl_blog_post'] = BlogPostModel::class;