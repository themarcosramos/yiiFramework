<div class="form">


<?php $form = $this->beginWidget('CActiveForm', array(
	'id' => 'tipos-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Campos com '); ?> <span class="required">*</span> <?php echo Yii::t('app', 'são obrigatórios'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model, 'nome', array('maxlength' => 150)); ?>
		<?php echo $form->error($model,'nome'); ?>

		<label><?php // echo GxHtml::encode($model->getRelationLabel('tarefas')); ?></label>
		<?php //echo $form->checkBoxList($model, 'tarefases', GxHtml::encodeEx(GxHtml::listDataEx(Tarefas::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'salvar'));
$this->endWidget();
?>
</div><!-- form -->