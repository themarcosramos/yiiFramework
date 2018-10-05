<?php
/* @var $this TarefaController */
/* @var $model Tarefa */

$this->breadcrumbs=array(
	'Tarefas'=>array('index'),
	$model->idTarefa,
);

$this->menu=array(
	array('label'=>'List Tarefa', 'url'=>array('index')),
	array('label'=>'Create Tarefa', 'url'=>array('create')),
	array('label'=>'Update Tarefa', 'url'=>array('update', 'id'=>$model->idTarefa)),
	array('label'=>'Delete Tarefa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idTarefa),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tarefa', 'url'=>array('admin')),
);
?>

<h1>View Tarefa #<?php echo $model->idTarefa; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idTarefa',
		'titulo',
		'privacidade',
		'descricao',
		'situacao',
		'conslusao',
		'idTipo',
	),
)); ?>
