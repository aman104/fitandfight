<h1>GRAFIK FITNESS</h1>

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
					<?php include_partial('activities/one', array('object' => $activities[$date][1])); ?>
				</td>
			<?php else: ?>
				<td></td>
			<?php endif; ?>
			<?php if(isset($activities[$date][2])): ?>
				<td class="active">
					<?php include_partial('activities/one', array('object' => $activities[$date][2])); ?>
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

	<!--
	<tr>
		<td>8:00 - 8:30</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td class="active">
			<a href="#">Step & Shape Przykład (Ania)</a>
			<div class="grafik-desc">
				<div class="arrow"></div>
				<span>Step & Shape Przykład (Ania)</span>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
				</p>
			</div>
		</td>
		<td></td>
	</tr>
	<tr>
		<td>8:30 - 9:00</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>9:30 - 10:00</td>
		<td></td>
		<td class="active">
			<a href="#">Step & Shape Przykład (Ania)</a>
			<div class="grafik-desc">
				<div class="arrow"></div>
				<span>Step & Shape Przykład (Ania)</span>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
				</p>
			</div>
		</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>10:00 - 10:30</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td class="active">
			<a href="#">Step & Shape Przykład (Ania)</a>
			<div class="grafik-desc">
				<div class="arrow"></div>
				<span>Step & Shape Przykład (Ania)</span>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
				</p>
			</div>
		</td>
	</tr>-->
</table>

