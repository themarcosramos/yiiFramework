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
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'criacao'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'criacao',
			'value' => $model->criacao,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'dd/mm/yy',
				),
			'htmlOptions'=>array(
				 'maxlength' => '10', 
				 'title' => 'dd/mm/aaaa',
				 'pattern' => '\d{1,2}/\d{1,2}/\d{4}',
				),
			));
; ?>
		<?php echo $form->error($model,'criacao'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'modificacao'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'modificacao',
			'value' => $model->modificacao,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'dd/mm/yy',
				),
			'htmlOptions'=>array(
				 'maxlength' => '10', 
				 'title' => 'dd/mm/aaaa',
				 'pattern' => '\d{1,2}/\d{1,2}/\d{4}',
				),
			));
; ?>
		<?php echo $form->error($model,'modificacao'); ?>
		</div><!-- row -->

		<label><?php // echo GxHtml::encode($model->getRelationLabel('tarefas')); ?></label>
		<?php //echo $form->checkBoxList($model, 'tarefases', GxHtml::encodeEx(GxHtml::listDataEx(Tarefas::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->