<?php

declare(strict_types=1);

/*
 * This file is part of Simple Blog for Contao.
 *
 * (c) Hamid Peywasti 2023 <hamid@respinar.com>
 *
 * @license MIT
 */

namespace Respinar\SimpleBlogBundle\DataContainer;

use Contao\CoreBundle\DependencyInjection\Attribute\AsCallback;
use Contao\CoreBundle\Framework\ContaoFramework;
use Contao\DataContainer;
use Contao\Input;
use Contao\System;

#[AsCallback(table: 'tl_blog', target: 'edit.buttons', priority: 100)]
class Blog
{
    private ContaoFramework $framework;

    public function __construct(ContaoFramework $framework)
    {
        $this->framework = $framework;
    }

    public function __invoke(array $arrButtons, DataContainer $dc): array
    {
        $inputAdapter = $this->framework->getAdapter(Input::class);
        $systemAdapter = $this->framework->getAdapter(System::class);

        $systemAdapter->loadLanguageFile('tl_blog');

        if ('edit' === $inputAdapter->get('act')) {
            $arrButtons['customButton'] = '<button type="submit" name="customButton" id="customButton" class="tl_submit customButton" accesskey="x">'.$GLOBALS['TL_LANG']['tl_blog']['customButton'].'</button>';
        }

        return $arrButtons;
    }
}
