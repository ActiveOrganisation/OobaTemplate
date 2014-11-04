<?php

// no direct access
defined('_JEXEC') or die;

// add CSS
JHtml::stylesheet('templates/oobatemplate/html/mod_raxo_allmode/ooba-news/ooba-news.css');

// set the number of columns
$topcolumn	= 1;
$column		= 2;
?>


<?php if ($toplist) { ?>
<div class="allmode-topbox">
<?php										// All-mode TOP Items Output
$a = 1;
foreach ($toplist as $item) { ?>

	<div class="allmode-topitem">

		<?php if ($item->title) { ?>
      	<div class="allmode-title">
          <h3><a href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a></h3>
          <?php if ($item->date) { ?>
          <div class="allmode-date"><?php echo $item->date; ?></div>
          <?php } ?>
  
          <?php if ($item->comments_count) { ?>
          <span class="allmode-comments"><a href="<?php echo $item->comments_link; ?>"><?php echo $item->comments_count; ?></a></span>
          <?php } ?>          
      </div><!-- End of topItem Title block -->  
		<?php } ?>      
      
      

	<div class="newsItemContentWrapper">
      	<?php if ($item->image) { ?>
		<div class="allmode-img"><?php echo $item->image; ?></div>
		<?php } ?>

		<?php if ($item->category || $item->hits || $item->author || $item->rating) { ?>
		<div class="allmode-info">

			<?php if ($item->category) { ?>
			<span class="allmode-category"><?php echo $item->category; ?></span>
			<?php } ?>

			<?php if ($item->hits) { ?>
			<span class="allmode-hits"><?php echo $item->hits; ?></span>
			<?php } ?>

			<?php if ($item->author) { ?>
			<span class="allmode-author"><?php echo $item->author; ?></span>
			<?php } ?>

			<?php if ($item->rating) { ?>
			<span class="allmode-rating" title="<?php echo @$item->rating_value; ?>"><?php echo $item->rating; ?></span>
			<?php } ?>
		</div>
		<?php } ?>



		<?php if ($item->text) { ?>
		<div class="allmode-text"><?php echo $item->text; ?></div>
		<?php } ?>

		<?php if ($item->readmore) { ?>
		<span class="allmode-readmore"><?php echo $item->readmore; ?></span>
		<?php } ?>
      
      <div class="clear"></div>
	</div><!-- End of newsItemContentWrapper -->  
	</div><!-- End of Top Item -->

	<?php if (($a % $topcolumn) == 0) { ?>
	<div class="allmode-clear"></div>
	<?php } ?>

<?php $a++; } ?>
</div>
<?php } ?>








<?php if ($list) { ?>
<div class="allmode-itemsbox">
<?php										// All-mode Items Output
$a = 1;
foreach ($list as $item) { ?>

	<div class="allmode-item">

		<?php if ($item->title) { ?>
		<h4 class="allmode-title"><a href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a>
			<?php if ($item->comments_count) { ?>
			<span class="allmode-comments"><a href="<?php echo $item->comments_link; ?>"><?php echo $item->comments_count; ?></a></span>
			<?php } ?>
		</h4>
		<?php } ?>

		<?php if ($item->date || $item->category || $item->hits || $item->author || $item->rating) { ?>
		<div class="allmode-info">

			<?php if ($item->date) { ?>
			<span class="allmode-date"><?php echo $item->date; ?></span>
			<?php } ?>

			<?php if ($item->category) { ?>
			<span class="allmode-category"><?php echo $item->category; ?></span>
			<?php } ?>

			<?php if ($item->hits) { ?>
			<span class="allmode-hits"><?php echo $item->hits; ?></span>
			<?php } ?>

			<?php if ($item->author) { ?>
			<span class="allmode-author"><?php echo $item->author; ?></span>
			<?php } ?>

			<?php if ($item->rating) { ?>
			<span class="allmode-rating" title="<?php echo @$item->rating_value; ?>"><?php echo $item->rating; ?></span>
			<?php } ?>
		</div>
		<?php } ?>

		<?php if ($item->image) { ?>
		<div class="allmode-img"><?php echo $item->image; ?></div>
		<?php } ?>

		<?php if ($item->text) { ?>
		<div class="allmode-text"><?php echo $item->text; ?></div>
		<?php } ?>

		<?php if ($item->readmore) { ?>
		<span class="allmode-readmore"><?php echo $item->readmore; ?></span>
		<?php } ?>
	</div>

	<?php if (($a % $column) == 0) { ?>
	<div class="allmode-clear"></div>
	<?php } ?>

<?php $a++; } ?>
</div>
<?php } ?>