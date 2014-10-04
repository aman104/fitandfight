<?php if($sf_user->hasFlash('error')): ?>
<div class="flash flash-error">
	<?php echo $sf_user->getFlash('error'); ?>
</div>
<?php endif; ?>
<?php if($sf_user->hasFlash('notice')): ?>
<div class="flash flash-notice">
	<?php echo $sf_user->getFlash('notice'); ?>
</div>
<?php endif; ?>