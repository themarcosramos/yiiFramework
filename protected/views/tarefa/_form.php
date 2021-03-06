<div class="form">

<?php $form = $this->beginWidget('CActiveForm', array(
	'id' => 'tarefas-form',
	'enableAjaxValidation' => false,
));
$model->usuario=Yii::app()->user->id;
?>
	<p class="note">
		<?php echo Yii::t('app', 'Campos com ');?> <span class="required">*</span> <?php echo Yii::t('app', 'são obrigatórios'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>
		<div class="row">
		<?php echo $form->labelEx($model,'título'); ?>
		<?php echo $form->textField($model, 'titulo', array('maxlength'=> 150)); ?>
		<?php echo $form->error($model,'titulo'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'privacidade'); ?>
		<?php echo $form->dropDownlist($model, 'privacidade', array('Publica'=>'Pública','Privada' => 'Privada'),array('empty'=>'Pública ou Privada?',));  ?>
		<?php echo $form->error($model,'privacidade'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'usuario'); ?>
		<?php echo $form->dropDownList($model, 'usuario', GxHtml::listDataEx(Usuarios::model()->findAllAttributes(null, true )), array('empty'=>'Qual seu usuário?',)); ?>
		<?php echo $form->error($model,'usuario'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php echo $form->dropDownList($model, 'tipo', GxHtml::listDataEx(Tipos::model()->findAllAttributes(null, true)),array('empty'=>'Qual o tipo da tarefa?',)); ?>
		<?php echo $form->error($model,'tipo'); ?>
		</div><!-- row -->
		<div class="row">
		<div class="row">
		<?php echo $form->labelEx($model,'T_status'); ?>
		<?php echo $form->dropDownlist($model,'T_status',array('Concluida'=>'Concluída','Pendente' => 'Pendente'),array('empty'=>'Qual o status  da tarefa?',));?>
		<?php echo $form->error($model,'T_status'); ?>
		</div><!-- row -->
		<?php echo $form->labelEx($model,'descricao'); ?>
		<?php echo $form->textarea($model, 'descricao',array('maxlength' => 250)); ?>
		<?php echo $form->error($model,'descricao'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'conclusao'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'conclusao',
			'language'=>'pt-BR',
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
		<?php echo $form->error($model,'conclusao'); ?>
		</div><!-- row -->

<?php 
echo GxHtml::submitButton(Yii::t('app', 'salvar'));
$this->endWidget();
?>
</div><!-- form -->