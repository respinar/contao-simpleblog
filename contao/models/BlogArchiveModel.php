<?php

/*
 * This file is part of Simple Blog for Contao.
 *
 * (c) Hamid Peywasti 2023 <hamid@respinar.com>
 *
 * @license MIT
 */

namespace Respinar\SimpleBlogBundle\Model;

use Contao\Model\Collection;
use Contao\Model;

/**
 * Reads and writes blog archives
 */
class BlogArchiveModel extends Model
{
	/**
	 * Table name
	 * @var string
	 */
	protected static $strTable = 'tl_blog_archive';
}