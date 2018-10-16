<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'idUsuario'); ?>
		<?php echo $form->textField($model, 'idUsuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'nome'); ?>
		<?php echo $form->textField($model, 'nome', array('maxlength' => 150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'sexo'); ?>
		<?php echo $form->dropDownlist($model, 'sexo', array('Masculino' => 'Masculino', 'Feminino' => 'Feminino','Outros'=>'Outros')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'nascimento'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'nascimento',
			'value' => $model->nascimento,
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
			));?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'email'); ?>
		<?php echo $form->textField($model, 'email', array(
			'maxlength' => 128,
			'pattern' => '[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$',
			'placeholder' => 'exemplo@email.com',
			'title' => "Formato exigido: exemplo@email.com",
			));?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'login'); ?>
		<?php echo $form->textField($model, 'login', array('maxlength' => 128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'telefone'); ?>
		<?php 
		$this->widget('CMaskedTextField', array(
			'model' => $model,
			'attribute' => 'telefone',
			'mask' => '(99) ?99999-9999',
			'htmlOptions' => array('size' => 30)
			));
		?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'senha'); ?>
		<?php echo $form->textField($model, 'senha', array('maxlength' => 128)); ?>
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

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
