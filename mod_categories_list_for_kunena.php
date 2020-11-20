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
// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';

$categories = ModCategoriesListForKunenaHelper::getChildren(1);

foreach ($categories as $key => $value) {
    $categories[$key]->children = ModCategoriesListForKunenaHelper::getChildren($categories[$key]->id);
}

require JModuleHelper::getLayoutPath('mod_categories_list_for_kunena');
