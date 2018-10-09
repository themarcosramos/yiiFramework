<?php
/* @var $this RealizarController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Realizars',
);

$this->menu=array(
	array('label'=>'Create Realizar', 'url'=>array('create')),
	array('label'=>'Manage Realizar', 'url'=>array('admin')),
);
?>

<h1>Realizars</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
