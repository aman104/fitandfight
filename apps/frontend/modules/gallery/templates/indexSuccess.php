<h1>Galeria</h1>

<?php 
if($gallery)
{
	$pk = $gallery->getPrimaryKey();
	$pictures = $gallery->getPictures();
}
else
{
	$pk = 0;
	$pictures = array();
}
?>

<?php include_component('gallery', 'list', array('active' => $pk)); ?>

<?php include_partial('gallery/pictures', array('pictures' => $pictures)); ?>

<div class="clearfix"></div>