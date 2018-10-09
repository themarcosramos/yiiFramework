<?php
/* @var $this TarefaController */
/* @var $model Tarefa */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tarefa-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'titulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'privacidade'); ?>
		<?php echo $form->textField($model,'privacidade',array('size'=>7,'maxlength'=>7)); ?>
		<?php echo $form->error($model,'privacidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descricao'); ?>
		<?php echo $form->textField($model,'descricao',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'descricao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'situacao'); ?>
		<?php echo $form->textField($model,'situacao',array('size'=>9,'maxlength'=>9)); ?>
		<?php echo $form->error($model,'situacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'conslusao'); ?>
		<?php echo $form->textField($model,'conslusao'); ?>
		<?php echo $form->error($model,'conslusao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idTipo'); ?>
		<?php echo $form->textField($model,'idTipo'); ?>
		<?php echo $form->error($model,'idTipo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->