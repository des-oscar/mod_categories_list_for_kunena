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

JFactory::getDocument()->addStyleSheet('//stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
JFactory::getDocument()->addStyleSheet(JURI::root(true) . '/modules/mod_categories_list_for_kunena/tmpl/css/default.css');

?>

<div class="categories-list-forkunena<?php echo $moduleclass_sfx; ?>">
    <div class="container bg-light rounded border">
        <?php foreach ($categories as $category) : ?>
            <div class="row level-1-row p-2">
                <a class="px-2" href="<?php echo $category->getUri(); ?>"><?php echo $category->name; ?></a>
            </div>
            <ul class="row level-2-row p-2 my-2">
                <?php foreach ($category->children as $child) : ?>
                    <li class="col-auto px-2"><a href="<?php echo $child->getUri(); ?>"><?php echo $child->name; ?></a></li>
                <?php endforeach; ?>
            </ul>
        <?php endforeach; ?>
    </div>
</div>
