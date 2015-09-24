<?php
/* @var $this AlamacenesController */
/* @var $model Alamacen */

$this->breadcrumbs=array(
	'Alamacenes'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista Alamacen', 'url'=>array('index')),
	array('label'=>'Administrador Alamacen', 'url'=>array('admin')),
);
?>

<h1>Crear Alamacen</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>