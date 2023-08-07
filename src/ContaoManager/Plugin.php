<?php

declare(strict_types=1);

/*
<<<<<<< HEAD
 * This file is part of Simple Blog for Contao.
 *
 * (c) Hamid Peywasti 2023 <hamid@respinar.com>
 *
 * @license MIT
 */

namespace Respinar\SimpleBlogBundle\ContaoManager;
=======
 * This file is part of Simple Blog.
 *
 * (c) Hamid Abbaszadeh 2023 <abbaszadeh.h@gmail.com>
 * @license MIT
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/respinar/contao-simple-blog
 */

namespace Respinar\ContaoSimpleBlog\ContaoManager;
>>>>>>> b047c1b3b92d6b990ae6334b1743d6e2968e8d74

use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
<<<<<<< HEAD
use Contao\CoreBundle\ContaoCoreBundle;
use Respinar\ContaoSimpleBlog\RespinarSimpleBlogBundle;
=======
>>>>>>> b047c1b3b92d6b990ae6334b1743d6e2968e8d74

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
<<<<<<< HEAD
            BundleConfig::create(RespinarSimpleBlogBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
=======
            BundleConfig::create('Respinar\ContaoSimpleBlog\RespinarContaoSimpleBlog')
                ->setLoadAfter(['Contao\CoreBundle\ContaoCoreBundle']),
>>>>>>> b047c1b3b92d6b990ae6334b1743d6e2968e8d74
        ];
    }
}
