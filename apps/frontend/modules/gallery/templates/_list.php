<div class="gallery_list">
<ul>
	<?php foreach($galleries as $gallery): ?>
		<li><a class="<?php echo ($gallery->getPrimaryKey() == $active) ? 'active' : ''; ?>" href="<?php echo url_for('gallery', $gallery); ?>"><?php echo $gallery->getName(); ?></a></li>
	<?php endforeach; ?>
</ul>
</div>