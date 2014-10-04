<?php if(count($pictures) > 0): ?>
<div class="gallery">	

	<?php foreach($pictures as $picture): ?>
		<a href="<?php echo $picture->getPath('max'); ?>">
			<img src="<?php echo $picture->getPath('min'); ?>" style="margin: 3px;" />
		</a>
	<?php endforeach; ?>

</div>
<?php endif ?>