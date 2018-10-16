<div class="form">

<?php $form = $this->beginWidget('CActiveForm', array(
	'id' => 'usuarios-form',
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
		<?php echo $form->labelEx($model,'sexo'); ?>
		<?php echo $form->dropDownlist($model, 'sexo', array('Masculino' => 'Masculino', 'Feminino' => 'Feminino','Outros'=>'Outros')); ?>
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
				'dateFormat' => 'dd/mm/yy',
				),
			'htmlOptions'=>array(
				 'maxlength' => '10', 
				 'title' => 'dd/mm/aaaa',
				 'pattern' => '\d{1,2}/\d{1,2}/\d{4}',
				),
			));?>
		<?php echo $form->error($model,'nascimento'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model, 'email', array(
			'maxlength' => 128,
			'pattern' => '[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$',
			'placeholder' => 'exemplo@email.com',
			'title' => "Formato exigido: exemplo@email.com",
			));?>
		<?php echo $form->error($model,'email'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'login'); ?>
		<?php echo $form->textField($model, 'login', array('maxlength' => 128)); ?>
		<?php echo $form->error($model,'login'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'telefone'); ?>
		<?php 
		$this->widget('CMaskedTextField', array(
			'model' => $model,
			'attribute' => 'telefone',
			'mask' => '(99) ?99999-9999',
			'htmlOptions' => array('size' => 30)
			));
		?>		
		<?php echo $form->error($model,'telefone'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'senha'); ?>
		<?php echo $form->passwordField($model, 'senha', array(
			'minlength' => 6, 
			'maxlength' => 128,
			'pattern' => '(?:\\d+[a-z]|[a-z]+\\d)[a-z\\d]*',
			'title' => "A senha deve conter letras e números",			
			)); 
		?>
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

		<label><?php echo GxHtml::encode($model->getRelationLabel('tarefas')); ?></label>
		<?php echo $form->checkBoxList($model, 'tarefases', GxHtml::encodeEx(GxHtml::listDataEx(Tarefas::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->