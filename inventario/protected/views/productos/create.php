<?php
/* @var $this ProductosController */
/* @var $model Producto */

$this->breadcrumbs=array(
	'Productos'=>array('index'),
	'Agregar',
);

?>

<h1>Agregar nuevo producto</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>