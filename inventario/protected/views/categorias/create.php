<?php
/* @var $this CategoriasController */
/* @var $model Categoria */

$this->breadcrumbs=array(
	'Categoría'=>array('index'),
	'Agregar',
);


?>

<h1>Agregar una Categoría</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>