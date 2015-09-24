<?php
/* @var $this AjustesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ajustes',
);
?>

<?php if (Yii::app()->user->hasFlash('succes')):?>
<div class="alert alert-success">
    <?php echo Yii::app()->user->getFlash('success'); ?>
</div> 
<?php endif; ?>


<?php if (Yii::app()->user->hasFlash('error')):?>
<div class="error">
    <?php echo Yii::app()->user->getFlash('error'); ?>
</div> 
<?php endif; ?>

<div class="form-horizontal ">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ajustes-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	

	<?php echo $form->errorSummary($model); ?>


	<div class="control-group">
		<?php echo $form->labelEx($model,'producto', array('class'=>'control-label')); ?>
            <div class="controls">
		<?php echo $form->dropDownList($model,'producto', Producto::toList(), array ('empty'=>'Seleccione...')); ?>
		<?php echo $form->error($model,'producto'); ?>
            </div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'alamacen', array('class'=>'control-label')); ?>
            <div class="controls">
		<?php echo $form->dropDownList($model,'alamacen', Alamacen::toList(), array ('empty'=>'Seleccione...')); ?>
		<?php echo $form->error($model,'alamacen'); ?>
            </div>
	</div>
    
           <div class="control-group">
		<?php echo $form->labelEx($model,'signo', array('class'=>'control-label')); ?>
            <div class="controls">
		<?php echo $form->dropDownList($model,'signo', $model->signosList(), array ('empty'=>'Seleccione...') ); ?>
		<?php echo $form->error($model,'signo'); ?>
            </div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'cantidad', array('class'=>'control-label')); ?>
            <div class="controls">
		<?php echo $form->textField($model,'cantidad'); ?>
		<?php echo $form->error($model,'cantidad'); ?>
            </div>
	</div>
    
    
 

	<div class="control-group">
            <div class="controls">
		<?php echo CHtml::submitButton('Ajustar',
                        array('class'=>'btn btn-primary')
                        ); ?>
            </div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->