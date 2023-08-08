<?php

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

namespace Respinar\SimpleBlogBundle\Model;

use Contao\Model\Collection;
use Contao\Model;

/**
 * Reads and writes news feeds
 */
class BlogFeedModel extends Model
{
	/**
	 * Table name
	 * @var string
	 */
	protected static $strTable = 'tl_blog_feed';

	/**
	 * Find all feeds which include a certain news-archive
	 *
	 * @param integer $intId      The news archive ID
	 * @param array   $arrOptions An optional options array
	 *
	 * @return Collection|BlogFeedModel[]|BlogFeedModel|null A collection of models or null if the news archive is not part of a feed
	 */
	public static function findByArchive($intId, array $arrOptions=array())
	{
		$t = static::$strTable;

		return static::findBy(array("$t.archives LIKE '%\"" . (int) $intId . "\"%'"), null, $arrOptions);
	}

	/**
	 * Find news feeds by their IDs
	 *
	 * @param array $arrIds     An array of news feed IDs
	 * @param array $arrOptions An optional options array
	 *
	 * @return Collection|BlogFeedModel[]|BlogFeedModel|null A collection of models or null if there are no feeds
	 */
	public static function findByIds($arrIds, array $arrOptions=array())
	{
		if (empty($arrIds) || !\is_array($arrIds))
		{
			return null;
		}

		$t = static::$strTable;

		return static::findBy(array("$t.id IN(" . implode(',', array_map('\intval', $arrIds)) . ")"), null, $arrOptions);
	}
}

class_alias(BlogFeedModel::class, 'BlogFeedModel');