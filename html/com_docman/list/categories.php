<?
/**
 * @package     DOCman
 * @copyright   Copyright (C) 2011 - 2013 Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://www.joomlatools.com
 */
defined('KOOWA') or die; 
$start_level = isset($start_level) ? $start_level : 0;
?>

<div class="categories">
<? foreach ($categories as $category): ?>
    <div class="category" style="padding-left: <?= ($category->level-$start_level-1)*30+10 ?>px">
        <? if ($params->show_icon && !empty($category->params->icon)): ?>
        <a href="<?= @route($category) ?>">
        	<img align="left" src="<?= @helper('icon.path', array('icon' => $category->params->icon)) ?>" class="icon" />
        </a>
        <? endif ?>
        <div class="category-inner">
          
          <? // ooba:addition
  			// if ($params->show_image && $category->image):
            $image_path = KRequest::root().'/joomlatools-files/docman-images/'.$category->image;
         ?>
          	<?//= @helper('behavior.modal', array('selector' => 'a.thumbnail')); ?>
            <a class="thumbnail docman-document-thumbnail" href="<?= @route($category) ?>">
                <img src="<?= $image_path ?>" />
            </a>
          <? //endif ?>
          
          <h4 class="docman-title">
                <a href="<?= @route($category) ?>">
                    <?= @escape($category->title) ?>
                </a>
            </h4>
            <? if ($params->show_description && $category->description_summary): ?>
            <div class="description"><?= @prepareText($category->description_summary); ?></div>
            <? // ooba:addition ?>
          	<a class="viewDocs" href="<?= @route($category) ?>" target="_self">View documents</a>
          	<? //end ?>
          	<? endif ?>
        </div>
	</div>
<? endforeach; ?>
</div>