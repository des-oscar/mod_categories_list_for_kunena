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

require_once dirname(__FILE__) . '/helper.php';

$parentCategoriesId = $params->get('category_id');

$categories = array();
foreach ($parentCategoriesId as $parentCategory) {
    $categories = array_merge($categories, ModCategoriesListForKunenaHelper::getCategories($parentCategory));
}

foreach ($categories as $key => $value) {
    $categories[$key]->children = ModCategoriesListForKunenaHelper::getChildren($categories[$key]->id);
}

require JModuleHelper::getLayoutPath('mod_categories_list_for_kunena');
