<?php $right = isset($right) ? $right : false; ?> 

<div style="position: relative">
	<a class="show" href="#"><?= $object->getName(); ?></a>
	<div class="grafik-desc <?php echo ($right) ? 'right' : ''; ?>">
		<div class="arrow"></div>
		<a href="#" class="close">x</a>
		<span><?= $object->getName(); ?></span>
		<p>
			<?= $object->getDescription(); ?>
		</p>
	</div>
</div>