<?php foreach($types as $type): ?>

	<?php include_partial('activities/grafik', array('type' => $type)); ?>

<?php endforeach; ?>	

<!-- <table class="activitiesTable" cellpadding="10" cellpadding="10">
<tr>
	<?php /*foreach($types as $type): ?>
	<td>
		<a href="<?= url_for('activities_show', $type); ?>">
			<h2><?php echo $type->getName(); ?></h2>
			<img src="/uploads/activities/<?php echo $type->getIco(); ?>" />
		</a>
	</td>
	<?php endforeach;*/ ?>
</tr>
</table> -->