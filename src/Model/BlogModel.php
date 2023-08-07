<?php

declare(strict_types=1);

/*
 * This file is part of Simple Blog for Contao.
 *
 * (c) Hamid Peywasti 2023 <hamid@respinar.com>
 *
 * @license MIT
 */

namespace Respinar\SimpleBlogBundle\Model;

use Contao\Model;

class BlogModel extends Model
{
    protected static $strTable = 'tl_blog';
}
