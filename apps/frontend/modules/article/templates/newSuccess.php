<div class="post">
    <?php $date = $object->getCreatedAt(); ?>
    <div class="post-date"><?php echo date('d', strToTime($date)); ?><br/><?php echo date('M', strToTime($date)); ?></div>
    <div class="post-content" style="width: 750px;">
        <h2><?php echo $object->getTitle(); ?></h2>
        <p><?php echo $object->getContent(ESC_RAW); ?></p>
    </div>

    <?php $pictures = $object->getGallery()->getPictures(); ?>
	<?php if(count($pictures) > 1): ?>
		<div class="pictures" style="width: auto; float: none;">

		<?php foreach($pictures as $picture): ?>
			<a href="<?php echo $picture->getPath('max'); ?>"><img src="<?php echo $picture->getPath('min'); ?>" /></a>
		<?php endforeach; ?>

		</div>
	<?php endif; ?>

</div>