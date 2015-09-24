<?php
/* @var $this ConsultaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Consulta',
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
	'id'=>'ajuste-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

    <div class="control-group">
		<?php echo $form->labelEx($model,'alamacen', array('class'=>'control-label')); ?>
            <div class="controls">
		<?php echo $form->dropDownList($model,'alamacen', Alamacen::toList(), array ('empty'=>'Seleccione...')); ?>
		<?php echo $form->error($model,'alamacen'); ?>
            </div>
	</div>
    

    
 

	<div class="control-group">
            <div class="controls">
		<?php echo CHtml::submitButton('Consultar',
                        array('class'=>'btn btn-primary')
                        ); ?>
            </div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->