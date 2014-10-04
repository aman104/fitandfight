<?php if(count($files) > 0): ?>
	<h5><?php echo __('Pliki do pobrania'); ?>:</h5>
	<div class="files">	
		<ul>
		<?php foreach($files as $file): ?>
			<li><a href="<?php echo $file->getPath(); ?>"><?php echo $file->getName(); ?></a></li>
		<?php endforeach; ?>
		</ul>
	</div>
<?php endif ?>