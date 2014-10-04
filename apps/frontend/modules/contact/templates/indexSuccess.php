<?php include_partial('layout/flash'); ?>

<div class="contact-left">

	<h1><?php echo __('Kontakt'); ?></h1>

	<?php echo $object->getAddress(ESC_RAW); ?>

</div>

<div class="contact-right">

	<h1><?php echo __('Zapytanie'); ?></h1>

	<form action="<?php echo url_for('@contact'); ?>" method="post">
		<table>
		<?php echo $form; ?>	
		<tr>
			<td></td>
			<td><input type="submit" class="button" value="<?php echo __('Wyślij'); ?>" /></td>
		</tr>
		</table>
	</form>

</div>

<div class="contact-center">

	<?php echo $object->getMap(ESC_RAW); ?>

</div>