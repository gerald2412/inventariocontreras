<?php
/* @var $this AlamacenesController */
/* @var $model Alamacen */

$this->breadcrumbs=array(
	'Alamacens'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Alamacen', 'url'=>array('index')),
	array('label'=>'Create Alamacen', 'url'=>array('create')),
	array('label'=>'View Alamacen', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Alamacen', 'url'=>array('admin')),
);
?>

<h1>Update Alamacen <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>