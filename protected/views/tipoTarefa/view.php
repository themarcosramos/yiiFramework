<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'Lista ') . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Cadastrar') . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Atualizar') . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->idTipo)),
	array('label'=>Yii::t('app', 'Administrar') . ' ' . $model->label(2), 'url'=>array('admin')),
	array('label'=>'Delete tipo de tarefa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idTipo),'confirm'=>$model->removeTipoTarefa($model->idTipo))), 

);
?>

<h1><?php echo Yii::t('app', ' ') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
//'idTipo',
'nome',
'criacao',
'modificacao',
	),
)); ?>

<h2><?php echo GxHtml::encode($model->getRelationLabel('tarefases')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->tarefases as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('tarefas/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>