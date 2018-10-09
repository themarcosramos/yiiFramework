<?php
/* @var $this RealizarController */
/* @var $model Realizar */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'realizar-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'criacao'); ?>
		<?php echo $form->textField($model,'criacao'); ?>
		<?php echo $form->error($model,'criacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modificacao'); ?>
		<?php echo $form->textField($model,'modificacao'); ?>
		<?php echo $form->error($model,'modificacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idUsuario'); ?>
		<?php echo $form->textField($model,'idUsuario'); ?>
		<?php echo $form->error($model,'idUsuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idTarefa'); ?>
		<?php echo $form->textField($model,'idTarefa'); ?>
		<?php echo $form->error($model,'idTarefa'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->