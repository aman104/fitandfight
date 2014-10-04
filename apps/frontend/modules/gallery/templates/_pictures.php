<div class="pictures">

<?php foreach($pictures as $picture): ?>
	<a href="<?php echo $picture->getPath('max'); ?>"><img src="<?php echo $picture->getPath('min'); ?>" /></a>
<?php endforeach; ?>

</div>