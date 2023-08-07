<?php

declare(strict_types=1);

/*
<<<<<<< HEAD
 * This file is part of Simple Blog for Contao.
 *
 * (c) Hamid Peywasti 2023 <hamid@respinar.com>
 *
 * @license MIT
=======
 * This file is part of Simple Blog.
 *
 * (c) Hamid Abbaszadeh 2023 <abbaszadeh.h@gmail.com>
 * @license MIT
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/respinar/contao-simple-blog
>>>>>>> b047c1b3b92d6b990ae6334b1743d6e2968e8d74
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

