<?php
/* @var $this CategoriasController */
/* @var $model Categoria */

$this->breadcrumbs=array(
	'Categoría'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Modificar',
);


?>

<h1>Modificar categoría</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>