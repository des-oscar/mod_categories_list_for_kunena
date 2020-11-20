<?php

/**
 * @title        Categories list for Kunena
 * @copyright    Copyright (C) 2020 Esangtek, All rights reserved.
 * @license      GNU General Public License version 3 or later.
 * @author url   https://des13.com/
 * @developers   Oscar Lin
 */

// No direct access
defined('_JEXEC') or die;

require_once JPATH_ROOT . '/libraries/kunena/forum/category/helper.php';
require_once JPATH_ROOT . '/libraries/kunena/layout/layout.php';

class ModCategoriesListForKunenaHelper
{
    public static function getChildren($parent)
    {
        return KunenaForumCategoryHelper::getChildren($parent);
    }
}
