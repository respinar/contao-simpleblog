<?php

declare(strict_types=1);

/*
 * This file is part of Simple Blog for Contao.
 *
 * (c) Hamid Peywasti 2023 <hamid@respinar.com>
 *
 * @license MIT
 */

namespace Respinar\SimpleBlogBundle\Security;

final class BlogPermissions
{
    public const USER_CAN_EDIT_ARCHIVE = 'contao_user.blogs';
    public const USER_CAN_CREATE_ARCHIVES = 'contao_user.blogp.create';
    public const USER_CAN_DELETE_ARCHIVES = 'contao_user.blogp.delete';

    public const USER_CAN_EDIT_FEED = 'contao_user.blogfeeds';
    public const USER_CAN_CREATE_FEEDS = 'contao_user.blogfeedp.create';
    public const USER_CAN_DELETE_FEEDS = 'contao_user.blogfeedp.delete';
}
