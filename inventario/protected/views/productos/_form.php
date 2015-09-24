 <?php
/* @var $this ProductosController */
/* @var $model Producto */
/* @var $form CActiveForm */
?>

<div class="form-horizontal">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'producto-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	

	<div class="control-group">
		<?php echo $form->labelEx($model,'id', array('class'=>'control-label')); ?>
            <div class="controls">
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>
        </div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'codigo', array('class'=>'control-label')); ?>
            <div class="controls">
		<?php echo $form->textField($model,'codigo',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'codigo'); ?>
	</div>
        </div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'nombre', array('class'=>'control-label')); ?>
            <div class="controls">
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>
        </div>
            
	<div class="control-group">
		<?php echo $form->labelEx($model,'descripcion', array('class'=>'control-label')); ?>
            <div class="controls">
		<?php echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>
        </div>

	<div class="control-group">
            
		<?php echo $form->labelEx($model,'categorias_id', array('class'=>'control-label')); ?>
            <div class="controls">
		<?php echo $form->dropDownList($model,'categorias_id', Categoria::toList(), array('empty'=>'Seleccione...')); ?>
		<?php echo $form->error($model,'categorias_id'); ?>
	</div>
        </div>
	
    
    <div class="control-group">
            <div class="controls">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Agregar' : 'Save',
                        array('class'=>'btn btn-primary')
                        ); ?> 
            </div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->