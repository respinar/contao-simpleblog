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
use Respinar\SimpleBlogBundle\Model\BlogFeedModel;
use Respinar\SimpleBlogBundle\Blog;

// Back end modules
$GLOBALS['BE_MOD']['content']['blog'] = array
(
	'tables'      => array('tl_blog_archive', 'tl_blog_post', 'tl_content'),
	'table'       => array(BackendCsvImportController::class, 'importTableWizardAction'),
	'list'        => array(BackendCsvImportController::class, 'importListWizardAction')
);

// Front end modules
$GLOBALS['FE_MOD']['blog'] = array
(
	// 'newslist'    => ModuleBlogList::class,
	// 'newsreader'  => ModuleBlogReader::class,
	// 'newsarchive' => ModuleBlogArchive::class,
	// 'newsmenu'    => ModuleBlogMenu::class
);

// Register hooks
$GLOBALS['TL_HOOKS']['removeOldFeeds'][] = array(Blog::class, 'purgeOldFeeds');
$GLOBALS['TL_HOOKS']['getSearchablePages'][] = array(Blog::class, 'getSearchablePages');
$GLOBALS['TL_HOOKS']['generateXmlFiles'][] = array(Blog::class, 'generateFeeds');

// Add permissions
$GLOBALS['TL_PERMISSIONS'][] = 'blogs';
$GLOBALS['TL_PERMISSIONS'][] = 'blogp';
$GLOBALS['TL_PERMISSIONS'][] = 'blogfeeds';
$GLOBALS['TL_PERMISSIONS'][] = 'blogfeedp';

// Models
$GLOBALS['TL_MODELS']['tl_blog_archive'] = BlogArchiveModel::class;
$GLOBALS['TL_MODELS']['tl_blog_post'] = BlogPostModel::class;
$GLOBALS['TL_MODELS']['tl_blog_feed'] = BlogFeedModel::class;