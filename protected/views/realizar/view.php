<?php
/* @var $this RealizarController */
/* @var $model Realizar */

$this->breadcrumbs=array(
	'Realizars'=>array('index'),
	$model->idRealizar,
);

$this->menu=array(
	array('label'=>'List Realizar', 'url'=>array('index')),
	array('label'=>'Create Realizar', 'url'=>array('create')),
	array('label'=>'Update Realizar', 'url'=>array('update', 'id'=>$model->idRealizar)),
	array('label'=>'Delete Realizar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idRealizar),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Realizar', 'url'=>array('admin')),
);
?>

<h1>View Realizar #<?php echo $model->idRealizar; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idRealizar',
		'criacao',
		'modificacao',
		'idUsuario',
		'idTarefa',
	),
)); ?>
