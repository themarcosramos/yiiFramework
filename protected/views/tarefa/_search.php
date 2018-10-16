<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'idTarefa'); ?>
		<?php echo $form->textField($model, 'idTarefa'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'titulo'); ?>
		<?php echo $form->textField($model, 'titulo', array('maxlength' => 150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'privacidade'); ?>
		<?php echo $form->dropDownlist($model, 'privacidade', array('Publica'=>'Pública', 'Privada' => 'Privada')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'descricao'); ?>
		<?php echo $form->textField($model, 'descricao', array('maxlength' => 250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'T_status'); ?>
		<?php echo $form->dropDownlist($model,'T_status', array('Concluida'=>'Concluída','Pendente' => 'Pendente'));?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'conclusao'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'conclusao',
			'value' => $model->conclusao,
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
	</div>

	<div class="row">
		<?php echo $form->label($model, 'criacao'); ?>
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
	</div>

	<div class="row">
		<?php echo $form->label($model, 'modificacao'); ?>
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
	</div>

	<div class="row">
		<?php echo $form->label($model, 'usuario'); ?>
		<?php echo $form->dropDownList($model, 'usuario', GxHtml::listDataEx(Usuarios::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'tipo'); ?>
		<?php echo $form->dropDownList($model, 'tipo', GxHtml::listDataEx(Tipos::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
