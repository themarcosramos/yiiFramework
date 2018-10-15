<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'usuarios-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model, 'nome', array('maxlength' => 150)); ?>
		<?php echo $form->error($model,'nome'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'sexo'); ?>
		<?php echo $form->textField($model, 'sexo', array('maxlength' => 9)); ?>
		<?php echo $form->error($model,'sexo'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'nascimento'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'nascimento',
			'value' => $model->nascimento,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
		<?php echo $form->error($model,'nascimento'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model, 'email', array('maxlength' => 150)); ?>
		<?php echo $form->error($model,'email'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'login'); ?>
		<?php echo $form->textField($model, 'login', array('maxlength' => 128)); ?>
		<?php echo $form->error($model,'login'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'telefone'); ?>
		<?php echo $form->textField($model, 'telefone', array('maxlength' => 30)); ?>
		<?php echo $form->error($model,'telefone'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'senha'); ?>
		<?php echo $form->textField($model, 'senha', array('maxlength' => 128)); ?>
		<?php echo $form->error($model,'senha'); ?>
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
				'dateFormat' => 'yy-mm-dd',
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
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
		<?php echo $form->error($model,'modificacao'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('tarefases')); ?></label>
		<?php echo $form->checkBoxList($model, 'tarefases', GxHtml::encodeEx(GxHtml::listDataEx(Tarefas::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->