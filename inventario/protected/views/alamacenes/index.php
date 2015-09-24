<?php
/* @var $this AlamacenesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Almacenes',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#alamacen-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
 
?>

<h1>Almacenes</h1>

<?php echo CHtml::link('Búsqueda avanzada ','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<div class="pull-right">
   <?php echo CHtml::submitButton('Agregar nuevo', array(
       'submit'=>array('create'),
       'class'=>'btn btn-primary',
       )); 
   ?>
 
</div>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'alamacen-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'descripcion',
		'capacidad',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?> 
