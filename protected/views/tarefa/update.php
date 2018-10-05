<?php
/* @var $this TarefaController */
/* @var $model Tarefa */

$this->breadcrumbs=array(
	'Tarefas'=>array('index'),
	$model->idTarefa=>array('view','id'=>$model->idTarefa),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tarefa', 'url'=>array('index')),
	array('label'=>'Create Tarefa', 'url'=>array('create')),
	array('label'=>'View Tarefa', 'url'=>array('view', 'id'=>$model->idTarefa)),
	array('label'=>'Manage Tarefa', 'url'=>array('admin')),
);
?>

<h1>Update Tarefa <?php echo $model->idTarefa; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>