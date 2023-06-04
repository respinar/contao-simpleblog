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

namespace Respinar\ContaoSimpleBlog\Model;

use Contao\Model;

class BlogModel extends Model
{
    protected static $strTable = 'tl_blog';
}
