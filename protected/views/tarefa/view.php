<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'Listar') . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Cadastrar') . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Atualizar') . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->idTarefa)),
     array('label'=>Yii::t('app', 'Deletar') . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->idTarefa), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Adminstar') . ' ' . $model->label(2), 'url'=>array('admin')),

);
?>

<h1><?php echo Yii::t('app', ' ') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'idTarefa',
'titulo',
'privacidade',
'descricao',
'T_status',
'conclusao',
'criacao',
'modificacao',
array(
			'name' => 'usuario0',
			'type' => 'raw',
			'value' => $model->usuario0 !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->usuario0)), array('usuarios/view', 'id' => GxActiveRecord::extractPkValue($model->usuario0, true))) : null,
			),
array(
			'name' => 'tipo0',
			'type' => 'raw',
			'value' => $model->tipo0 !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->tipo0)), array('tipos/view', 'id' => GxActiveRecord::extractPkValue($model->tipo0, true))) : null,
			),
	),
)); ?>

