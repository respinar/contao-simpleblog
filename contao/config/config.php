<?php

/*
 * This file is part of Simple Blog for Contao.
 *
 * (c) Hamid Peywasti 2023 <hamid@respinar.com>
 *
 * @license MIT
 */

use Respinar\SimpleBlogBundle\Model\BlogModel;

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
