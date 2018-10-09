<?php
/* @var $this RealizarController */
/* @var $model Realizar */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idRealizar'); ?>
		<?php echo $form->textField($model,'idRealizar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'criacao'); ?>
		<?php echo $form->textField($model,'criacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'modificacao'); ?>
		<?php echo $form->textField($model,'modificacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idUsuario'); ?>
		<?php echo $form->textField($model,'idUsuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idTarefa'); ?>
		<?php echo $form->textField($model,'idTarefa'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->