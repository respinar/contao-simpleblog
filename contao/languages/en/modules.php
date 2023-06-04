<?php

declare(strict_types=1);

/*
 * This file is part of Simple Blog.
 *
 * (c) Hamid Abbaszadeh 2023 <abbaszadeh.h@gmail.com>
 * @license MIT
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/respinar/contao-simple-blog
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

