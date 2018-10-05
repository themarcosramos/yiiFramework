<?php
/* @var $this RealizarController */
/* @var $model Realizar */

$this->breadcrumbs=array(
	'Realizars'=>array('index'),
	$model->idRealizar=>array('view','id'=>$model->idRealizar),
	'Update',
);

$this->menu=array(
	array('label'=>'List Realizar', 'url'=>array('index')),
	array('label'=>'Create Realizar', 'url'=>array('create')),
	array('label'=>'View Realizar', 'url'=>array('view', 'id'=>$model->idRealizar)),
	array('label'=>'Manage Realizar', 'url'=>array('admin')),
);
?>

<h1>Update Realizar <?php echo $model->idRealizar; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>