<?php

declare(strict_types=1);

/*
 * This file is part of Simple Blog for Contao.
 *
 * (c) Hamid Peywasti 2023 <hamid@respinar.com>
 *
 * @license MIT
 */

use Respinar\ContaoSimpleBlog\Controller\FrontendModule\BlogListController;

/**
 * Backend modules
 */
$GLOBALS['TL_LANG']['MOD']['blog_post'] = ['Blog', 'Manage Blog posts'];

/**
 * Frontend modules
 */
$GLOBALS['TL_LANG']['FMD'][BlogListController::TYPE] = ['Blog list', 'Show list of blog posts'];

