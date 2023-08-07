<?php

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

use Respinar\ContaoSimpleBlog\Model\BlogModel;

/**
 * Backend modules
 */
$GLOBALS['BE_MOD']['content']['blog_post'] = array(
    'tables' => array('tl_blog')
);

/**
 * Models
 */
$GLOBALS['TL_MODELS']['tl_blog'] = BlogModel::class;
