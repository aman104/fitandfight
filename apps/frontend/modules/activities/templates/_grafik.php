<h1>GRAFIK <?php echo $type->getName(); ?></h1>

<?php $activities = $type->getActivitiesArray(); ?>

<table class="grafik">
	<tr>
		<th></th>
		<th>Poniedziałek</th>
		<th>Wtorek</th>
		<th>Środa</th>
		<th>Czwartek</th>
		<th>Piątek</th>
		<th>Sobota</th>
	</tr>

	<?php foreach($activities as $date => $tmps): ?>
		<tr>
			<td><?php echo $date ?></td>
			<?php if(isset($activities[$date][1])): ?>
				<td class="active">
					<?php include_partial('activities/one', array('object' => $activities[$date][1], 'right' => true)); ?>
				</td>
			<?php else: ?>
				<td></td>
			<?php endif; ?>
			<?php if(isset($activities[$date][2])): ?>
				<td class="active">
					<?php include_partial('activities/one', array('object' => $activities[$date][2], 'right' => true)); ?>
				</td>
			<?php else: ?>
				<td></td>
			<?php endif; ?>
			<?php if(isset($activities[$date][3])): ?>
				<td class="active">
					<?php include_partial('activities/one', array('object' => $activities[$date][3])); ?>
				</td>
			<?php else: ?>
				<td></td>
			<?php endif; ?>
			<?php if(isset($activities[$date][4])): ?>
				<td class="active">
					<?php include_partial('activities/one', array('object' => $activities[$date][4])); ?>
				</td>
			<?php else: ?>
				<td></td>
			<?php endif; ?>
			<?php if(isset($activities[$date][5])): ?>
				<td class="active">
					<?php include_partial('activities/one', array('object' => $activities[$date][5])); ?>
				</td>
			<?php else: ?>
				<td></td>
			<?php endif; ?>
			<?php if(isset($activities[$date][6])): ?>
				<td class="active">
					<?php include_partial('activities/one', array('object' => $activities[$date][6])); ?>
				</td>
			<?php else: ?>
				<td></td>
			<?php endif; ?>
		</tr>
	<?php endforeach; ?>
</table>

<br />