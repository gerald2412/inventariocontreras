<?php
/* @var $this AlamacenesController */
/* @var $model Alamacen */

$this->breadcrumbs=array(
	'Alamacens'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Alamacen', 'url'=>array('index')),
	array('label'=>'Create Alamacen', 'url'=>array('create')),
	array('label'=>'Update Alamacen', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Alamacen', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Alamacen', 'url'=>array('admin')),
);
?>

<h1>View Alamacen #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'descripcion',
		'capacidad',
	),
)); ?>
