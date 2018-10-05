<?php
/* @var $this RealizarController */
/* @var $model Realizar */

$this->breadcrumbs=array(
	'Realizars'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Realizar', 'url'=>array('index')),
	array('label'=>'Manage Realizar', 'url'=>array('admin')),
);
?>

<h1>Create Realizar</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>