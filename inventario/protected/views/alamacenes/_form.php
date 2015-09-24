<?php
/* @var $this AlamacenesController */
/* @var $model Alamacen */
/* @var $form CActiveForm */
?>

<div class="form-horizontal well">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'alamacen-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	

	<?php echo $form->errorSummary($model); ?>

	<div class="control-group">
		<?php echo $form->labelEx($model,'id', array('class'=>'control-label')); ?>
            <div class="controls">
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
            </div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'descripcion', array('class'=>'control-label')); ?>
            <div class="controls">
		<?php echo $form->textField($model,'descripcion',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
            </div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'capacidad', array('class'=>'control-label')); ?>
            <div class="controls">
		<?php echo $form->textField($model,'capacidad'); ?>
		<?php echo $form->error($model,'capacidad'); ?>
            </div>
	</div>

	<div class="control-group">
            <div class="controls">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Save',
                        array('class'=>'btn btn-primary')
                        ); ?>
            </div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->